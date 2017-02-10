<?php

Route::get('/',  function(){
    return "hello world";
});

Route::get('/posts', 'PostsController@create');
Route::post('/posts', 'PostsController@store');

Route::get('/tasks/{task}', function ($id) {

    $task = App\Task::find($id);
    return view('tasks.show')->with("task", $task);
});

Route::get('/tasks', 'TasksController@index');

Route::get('/register');

Route::get('/login');