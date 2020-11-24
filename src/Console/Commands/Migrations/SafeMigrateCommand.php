<?php

namespace SmartLaravel\SafeMigrate\Console\Commands\Migrations;

use SmartLaravel\SafeMigrate\Console\Commands\AdditionalSafetyChecksTrait;
use Illuminate\Database\Console\Migrations\MigrateCommand;

class SafeMigrateCommand extends MigrateCommand
{
    use AdditionalSafetyChecksTrait;
}
