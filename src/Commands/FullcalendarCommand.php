<?php

namespace Bappy3a\Fullcalendar\Commands;

use Illuminate\Console\Command;

class FullcalendarCommand extends Command
{
    public $signature = 'laravel-fullcalendar';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
