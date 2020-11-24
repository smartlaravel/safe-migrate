<?php

namespace SmartLaravel\SafeMigrate\Console\Commands\Migrations;

use Illuminate\Database\Console\WipeCommand;
use SmartLaravel\SafeMigrate\Console\Commands\AdditionalSafetyChecksTrait;

class SafeWipeCommand extends WipeCommand
{
    use AdditionalSafetyChecksTrait;
}
