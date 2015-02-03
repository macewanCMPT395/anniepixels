<?php

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/users', function()
{
  $users = User::all();
  return View::make('users/index', ['users' => $users]);
});

Route::get('/user/{username}', function($username)
{
  $user = User::whereUsername($username)->first();
  return View::make('users.show', ['user' => $user]);
});
