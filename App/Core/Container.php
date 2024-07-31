<?php

namespace App\Core;

use App\Exceptions\Container\ContainerException;
use Exception;
use ReflectionClass;
use ReflectionException;

class Container
{
    protected array $bindings = [];

    public function bind(string $key, callable $resolver): void
    {
        $this->bindings[$key] = $resolver;
    }

    /**
     * @throws Exception
     */
    public function resolve($key)
    {
        if (array_key_exists($key, $this->bindings)) {
            $resolver = $this->bindings[$key];

            return call_user_func($resolver, $this);
        }

        return $this->automaticResolve($key);
    }

    private function automaticResolve($key)
    {
        try {
            $reflectionClass = new ReflectionClass($key);

            $constructor = $reflectionClass->getConstructor();

            if (! $constructor) {
                return new $key;
            }

            $parameters = $constructor->getParameters();

            if (! $parameters) {
                return new $key;
            }

            // 4. if parameter is a class try to resolve it using the container
            $dependencies = [];
            foreach ($parameters as $parameter) {
                $name = $parameter->getName();
                $type = $parameter->getType();

                if (! $type) {
                    throw new ContainerException("Failed to resolve class {$key} because {$name} parameter is missing type hint");
                }

                if (! $type instanceof \ReflectionNamedType) {
                    throw new ContainerException("Failed to resolve class {$key} because {$name} parameter is not a named type");
                }

                if ($type->isBuiltIn()) {
                    throw new ContainerException("Failed to resolve class {$key} because {$name} parameter is a union type");
                }

                $dependencies[] = $this->resolve($type->getName());
            }


            return $reflectionClass->newInstanceArgs($dependencies);
        } catch (ReflectionException $e) {
            throw new ContainerException("class {$key} is not instantiable");
        }

    }
}