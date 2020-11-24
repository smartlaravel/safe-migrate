<?php

namespace SmartLaravel\SafeMigrate\Console\Commands\Migrations;

use SmartLaravel\SafeMigrate\Console\Commands\AdditionalSafetyChecksTrait;
use Illuminate\Database\Console\Migrations\RefreshCommand;

class SafeRefreshCommand extends RefreshCommand
{
    use AdditionalSafetyChecksTrait;
}
