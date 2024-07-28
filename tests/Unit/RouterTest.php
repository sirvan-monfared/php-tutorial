<?php

use App\Core\Router;
use App\Exceptions\RegisterRouteException;
use App\Exceptions\RouteNotMatchException;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    protected Router $router;

    protected function setUp(): void
    {
        parent::setUp();

        $this->router = new Router();
    }


    public function test_it_can_register_a_route() {

        $this->router->add('/test', ['controller', 'method'], 'GET', 'route_name');

        $expected = [
            [
                'uri' => '/test',
                'controller' => ['controller', 'method'],
                'method' => 'GET',
                'middleware' => null,
                'name' => 'route_name'
            ]
        ];

        $this->assertEquals($expected, $this->router->routes());
    }

    public function test_it_throws_an_exception_when_controller_is_not_an_array()
    {

        $this->expectException(RegisterRouteException::class);
        $this->router->add('/url', 'UserController', 'GET', 'name');
    }

    public function test_it_can_register_a_get_route()
    {

        $this->router->get('/user', ['controller', 'method'], 'name');

        $expected = [
            [
                'uri' => '/user',
                'controller' => ['controller', 'method'],
                'method' => 'GET',
                'middleware' => null,
                'name' => 'name'
            ]
        ];

        $this->assertEquals($expected, $this->router->routes());
    }

    public function test_it_can_register_a_post_route()
    {

        $this->router->post('/order', ['OrderController', 'store'], 'order.store');

        $expected = [
            [
                'uri' => '/order',
                'controller' => ['OrderController', 'store'],
                'method' => 'POST',
                'middleware' => null,
                'name' => 'order.store'
            ]
        ];

        $this->assertEquals($expected, $this->router->routes());
    }

    public function test_it_fails_when_route_not_found()
    {

        $this->router->get('/order', ['OrderController', 'index'], 'order.index');

        $this->expectException(RouteNotMatchException::class);
        $this->router->match('GET', '/user');
    }

    public function test_it_fails_when_class_not_exists()
    {

        $this->router->get('/order', ['App\UserController', 'index'], 'order.index');

        $this->expectException(RouteNotMatchException::class);
        $this->router->match('GET', '/order');
    }

    public function test_it_fails_when_method_not_exists()
    {

        $OrderController = new Class() {
            public function delete() {

            }
        };

        $this->router->get('/order', [$OrderController::class, 'index'], 'order.index');

        $this->expectException(RouteNotMatchException::class);
        $this->router->match('GET', '/order');
    }

    public function test_it_can_resolve_a_correct_route()
    {
        $OrderController = new Class() {
            public function index() {
                return "hello";
            }
        };

        $this->router->get('/order', [$OrderController::class, 'index'], 'order.index');

        $result = $this->router->match('GET', '/order');

        $this->assertEquals('hello', $result);
    }

    public function test_it_can_generate_route_url_from_route_name()
    {
        $OrderController = new Class() {
            public function index() {
                return "hello";
            }
        };

        $this->router->get('/order', [$OrderController::class, 'index'], 'order.index');
        $this->router->post('/order/update', [$OrderController::class, 'update'], 'order.update');

        $this->router->match('GET', '/order');

        $url = $this->router->route('order.update', []);
        $this->assertSame('/order/update', $url);
    }
}