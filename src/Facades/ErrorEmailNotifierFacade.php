<?php

namespace Vikasrinvi\LaravelPackageSkelaton\Facades;

use Illuminate\Support\Facades\Facade;

class ErrorEmailNotifierFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'error-email-notifier';
    }
}
