<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;
use App\Http\Controllers\InvokeController;
use App\Http\Controllers\InternsController;
use App\Http\Controllers\InternsWithResourceController;


    Route::get('/home', [InternsController::class, 'homepage']);
    
    Route::get('/create_new_transaction', [InternsWithResourceController::class, 'create']);
    Route::post('store_new_transaction', [InternsWithResourceController::class, 'store']);
    Route::get('/edit_new_transaction/{id}', [InternsWithResourceController::class, 'show']);
    Route::patch('/update_new_transaction/{id}', [InternsWithResourceController::class, 'update']);
    Route::get('/deactivate_transaction/{id}', [InternsWithResourceController::class, 'deactivate']);






// ---------------------------------



// wagpo
    Route::get('/', function () {
        // working
            // dump(config('services.mailgun.domain'));
            // dump(config('database.connections.mysql.username'));
        // not working dd(env)
            // dd(env('DB_HOST'));
        return view('welcome');
    });



    Route::get('/test', [NameController::class, 'index']);

    // basic routing 
        // 1:07:42 - 1:18:17
        // invoke method
        Route::get('/invokemethod', InvokeController::class);

    // Route::resource('test2', NameController::class);
    /*
        GET - common, Request a resource
        POST - Create a new resource
        PUT - Update a resource
        PATCH - Modify a resource
        DELETE - Delete a resource
        OPTIONS - Ask the server which verbs are allowed
        *see the resource route sample by using "php artisan route:list"
    */
    // // GET
    //     Route::get('/test2', [NameController::class, 'index']);
    //     Route::get('/test2/1', [NameController::class, 'show']);
    // // POST
    //     Route::get('/test2/create', [NameController::class, 'create']);
    //     Route::post('/test2', [NameController::class, 'store']);
    // // PUT or PATCH
    //     Route::get('/test2/edit/1', [NameController::class, 'edit']);
    //     Route::patch('/test2/1', [NameController::class, 'update']);
    // // DELETE
    //     Route::delete('/test2/1', [NameController::class, 'destroy']);

    // Multiple HTTP verbs
        // Route::match(['GET','POST'], '/test2', [NameController::class, 'index']);
        // Route::any('/test2', [NameController::class, 'index']);

    // Return view
        Route::view('/test2', 'test2_view.test2');
        Route::view('/test2_viewwithvalue', 'test2_view.test2_withvalue', ['name'=>'coding with laravel 9 and php 8']);

// wagpo



