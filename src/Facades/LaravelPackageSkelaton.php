<?php

namespace Vikasrinvi\LaravelPackageSkelaton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vikasrinvi\LaravelPackageSkelaton\LaravelPackageSkelaton
 */
class LaravelPackageSkelaton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Vikasrinvi\LaravelPackageSkelaton\LaravelPackageSkelaton::class;
    }
}
