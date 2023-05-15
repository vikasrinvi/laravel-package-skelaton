<?php

namespace Vikasrinvi\LaravelPackageSkelaton;

use Illuminate\Support\Facades\Mail;

class ErrorEmailNotifier
{
    public static function register()
    {
        app('log')->listen(function ($level, $message, $context) {
            if ($level === 'error') {
                self::sendErrorEmail($message);
            }
        });
    }

    private static function sendErrorEmail($message)
    {
        $email = config('error-email-notifier.email');

        Mail::raw($message, function ($message) use ($email) {
            $message->to($email)
                ->subject('Error Occurred!');
        });
    }
}
