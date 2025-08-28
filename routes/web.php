<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/livez', fn () => response()->json(['status' => 'live']));

Route::get('/readyz', function () {
    try {
        \DB::connection()->getPdo();

        return response()->json(['status' => 'ready']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'not ready'], 503);
    }
});

Route::get('/healthz', function () {
    try {
        DB::connection()->getPdo();
        $redisOk = Cache::store('redis')->ping() === '+PONG';
        if ($redisOk) {
            return Response::make('OK', 200);
        }
    } catch (\Throwable $e) {
        return Response::make('Unhealthy', 500);
    }

    return Response::make('Unhealthy', 500);
});
