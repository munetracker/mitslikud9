Laravel 9 API
https://www.youtube.com/watch?v=TzAJfjCn7Ks

    composer require laravel/sanctum
    php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

6:55

11:02
    HttpResponses.php

php artisan migrate
error fix in 
    Open AppServiceProvider.php file
    https://stackoverflow.com/questions/23786359/laravel-migration-unique-key-is-too-long-even-if-specified

php artisan route:list
php artisan make:model Task -m

php artisan make:request StoreUserRequest
https://laravel-news.com/defining-default-password-validation-rules


stopped - march6 - 33:00

php artisan make:request LoginUserRequest
php artisan migrate
php artisan make:factory TaskFactory

php artisan tinker
in terminal type
    User::factory()->times(5)->create();
    Task::factory()->times(50)->create();
    exit;


stopped - march7 - 1:03:00

to expire bearer token
    sanctum.php
    'expiration' => 43800
    43800 meaning token expire every 30 days

    kernel.php

php artisan schedule:list





---------------------------------------------------

* Reference using Laravel 9 in PHP 8
https://www.youtube.com/watch?v=2mqsVzgsV_c

* notes are written in "// wagpo"


* complete list of artisan commands
php artisan
    * commons
    php artisan make:controller NameController
    php artisan make:controller NameController --resource
    php artisan route:list

---------------------------------

* youtube paused at 1:18:17



