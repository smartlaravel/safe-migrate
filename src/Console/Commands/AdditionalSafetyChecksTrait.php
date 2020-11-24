<?php

namespace SmartLaravel\SafeMigrate\Console\Commands;

trait AdditionalSafetyChecksTrait
{
    /**
     * Check for safe database connection before allowing migrate command to run.
     */
    public function handle()
    {
        if (app()->isLocal()) {
            $databaseHostName = config('database.connections.mysql.host');

            $safetyCheck = $databaseHostName !== 'localhost'
                && $databaseHostName !== '127.0.0.1';

            if ($safetyCheck) {
                $this->alert('You are potentially connected to a live database!');

                $confirmed = $this->confirm('Do you really wish to run this command?');

                if (! $confirmed) {
                    $this->comment('Command Canceled!');

                    return false;
                }
            }
        }

        parent::handle();
    }
}
