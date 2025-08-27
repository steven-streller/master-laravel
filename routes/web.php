<?php

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
    $checks = [];
    $status = 200;

    try {
        \DB::connection()->getPdo();
        $checks['db'] = 'ok';
    } catch (\Exception $e) {
        $checks['db'] = 'fail';
        $status = 503;
    }

    return response()->json(['status' => $status === 200 ? 'healthy' : 'unhealthy', 'checks' => $checks], $status);
});
