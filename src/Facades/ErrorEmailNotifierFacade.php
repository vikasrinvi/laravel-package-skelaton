<?php

namespace Your\Package\Namespace\Facades;

use Illuminate\Support\Facades\Facade;

class ErrorEmailNotifierFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'error-email-notifier';
    }
}
