<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;

Route::get('/', function () {
    // wagpo
        // working
            // dump(config('services.mailgun.domain'));
            // dump(config('database.connections.mysql.username'));
        // not working dd(env)
            // dd(env('DB_HOST'));
    return view('welcome');
});

Route::get('/test', [NameController::class, 'index']);