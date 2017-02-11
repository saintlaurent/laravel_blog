<?php

Route::get('/',  function(){
    return view('welcome');
})->name('home');


Route::get('/posts', 'PostsController@index');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store')->middleware('auth');


Route::get('/tasks/{task}', function ($id) {

    $task = App\Task::find($id);
    return view('tasks.show')->with("task", $task);
});

Route::get('/tasks', 'TasksController@index');

Route::get('/register', 'RegistrationsController@create');

Route::post('/register', 'RegistrationsController@store');


Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');