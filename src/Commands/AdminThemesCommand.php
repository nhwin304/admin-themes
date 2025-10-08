<?php

namespace Nhwin304\AdminThemes\Commands;

use Illuminate\Console\Command;

class AdminThemesCommand extends Command
{
    public $signature = 'admin-themes';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
