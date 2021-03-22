<?php

namespace Math\Provider;

use Illuminate\Support\ServiceProvider;
use Math\Math;

class MathServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('math', function ($app) {
            return new Math();
        });
    }

}