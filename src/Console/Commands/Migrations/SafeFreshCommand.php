<?php

namespace SmartLaravel\SafeMigrate\Console\Commands\Migrations;

use Illuminate\Database\Console\Migrations\FreshCommand;
use SmartLaravel\SafeMigrate\Console\Commands\AdditionalSafetyChecksTrait;

class SafeFreshCommand extends FreshCommand
{
    use AdditionalSafetyChecksTrait;
}
