# Database-Migrations

### Multiple Databases in Laravel
[How to use multiple databases in Laravel](https://stackoverflow.com/questions/31847054/how-to-use-multiple-databases-in-laravel)


Using .env >= 5.0 (tested on 5.5)

In **.env**
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database1
DB_USERNAME=root
DB_PASSWORD=secret

DB_CONNECTION_SECOND=mysql
DB_HOST_SECOND=127.0.0.1
DB_PORT_SECOND=3306
DB_DATABASE_SECOND=database2
DB_USERNAME_SECOND=root
DB_PASSWORD_SECOND=secret
```

In **config/database.php**
```php
'mysql' => [
    'driver'    => env('DB_CONNECTION'),
    'host'      => env('DB_HOST'),
    'port'      => env('DB_PORT'),
    'database'  => env('DB_DATABASE'),
    'username'  => env('DB_USERNAME'),
    'password'  => env('DB_PASSWORD'),
],

'mysql2' => [
    'driver'    => env('DB_CONNECTION_SECOND'),
    'host'      => env('DB_HOST_SECOND'),
    'port'      => env('DB_PORT_SECOND'),
    'database'  => env('DB_DATABASE_SECOND'),
    'username'  => env('DB_USERNAME_SECOND'),
    'password'  => env('DB_PASSWORD_SECOND'),
],
```

**Note:** In mysql2 if DB_username and DB_password is same, then you can use env('DB_USERNAME') which is metioned in .env first few lines.


