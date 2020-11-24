<?php

namespace SmartLaravel\SafeMigrate\Console\Commands\Seeds;

use Illuminate\Database\Console\Seeds\SeedCommand;
use SmartLaravel\SafeMigrate\Console\Commands\AdditionalSafetyChecksTrait;

class SafeSeedCommand extends SeedCommand
{
    use AdditionalSafetyChecksTrait;
}
