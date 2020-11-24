<?php

namespace SmartLaravel\SafeMigrate\Console\Commands\Migrations;

use SmartLaravel\SafeMigrate\Console\Commands\AdditionalSafetyChecksTrait;
use Illuminate\Database\Console\Migrations\RollbackCommand;

class SafeRollbackCommand extends RollbackCommand
{
    use AdditionalSafetyChecksTrait;
}
