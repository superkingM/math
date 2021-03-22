<?php

namespace Math\Provider;


use Illuminate\Support\Facades\Facade;

class Math extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'math';
    }


}