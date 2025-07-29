<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/tasks', function () {
    return response()->json([
        'tasks' => [
            ['id' => 1, 'title' => 'Sample Task', 'description' => 'This is a sample task.', 'status' => 'pending']
        ]
    ]);
});
