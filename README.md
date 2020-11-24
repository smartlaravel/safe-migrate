# SmartLaravel SafeMigrate (for Laravel v8+)

> This package extends the migration and seed commands.  When you run `php artisan migrate` and your `DB_HOST` setting is not set to `127.0.0.1` or `localhost` you will receive a safety confirmation asking you to confirm running the migration.  This package was created out of an issue where I was connecting to different database connections to run commands remotely, I would forget to update the database connection and run a destructive migration on production.  Luckily we backed our data up and no developers were harmed.

To install:

```
composer require smartlaravel/safe-migrate
```

To test:

> You can set your hosts file to aim a random address to localhost, such as `12.23.34.45`.  Then set your Laravel .env file to use `DB_HOST=12.23.34.45`.  Run `php artisan migrate`, `php artisan migrate:fresh`, etc. and you should see a prompt warning you that your database connection is not local.
