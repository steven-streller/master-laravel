<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use \Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/livez', fn () => response()->json(['status' => 'live']));

Route::get('/readyz', function () {
    try {
        DB::connection()->getPdo();

        return response()->json(['status' => 'ready']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'not ready'], 503);
    }
});

Route::get('/healthz', function () {
    try {
        DB::connection()->getPdo();
        $redisOk = Redis::connection()->client()->ping();
        if ($redisOk === true) {
            return Response::make('OK');
        }
    } catch (\Throwable $e) {
        return Response::make('Unhealthy', 500);
    }

    return Response::make('Unhealthy', 500);
});
