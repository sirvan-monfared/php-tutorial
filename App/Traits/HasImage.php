<?php

namespace App\Traits;

trait HasImage
{
    public function featuredImage(): string
    {
        if (!$this->featured_image) return '';

        return asset("uploads/$this->featured_image");
    }

    public function featuredImageOrDefault(): string
    {
        return $this->featuredImage() ?: $this->defaultFeaturedImage();
    }

    public function featuredImagePath(): string
    {
        if (!$this->featured_image) return '';

        return base_path('public/assets/uploads/') . $this->featured_image;
    }

    public function defaultFeaturedImage(): string
    {
        return asset($this->default_image);
    }

    public function hasFeaturedImage(): bool
    {
        return ($this->featuredImage() && $this->featuredImagePath() && is_file($this->featuredImagePath()));
    }
}