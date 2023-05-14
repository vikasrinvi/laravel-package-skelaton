<?php

namespace Vikasrinvi\LaravelPackageSkelaton\Commands;

use Illuminate\Console\Command;

class LaravelPackageSkelatonCommand extends Command
{
    public $signature = 'laravel-package-skelaton';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
