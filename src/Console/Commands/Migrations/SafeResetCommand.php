<?php

namespace SmartLaravel\SafeMigrate\Console\Commands\Migrations;

use Illuminate\Database\Console\Migrations\ResetCommand;
use SmartLaravel\SafeMigrate\Console\Commands\AdditionalSafetyChecksTrait;

class SafeResetCommand extends ResetCommand
{
    use AdditionalSafetyChecksTrait;
}
