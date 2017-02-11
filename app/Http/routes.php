<?php
use App\Post;
use App\Album;
use App\Track;

//  =========================
//  CRUD APPLICATION
//  ===========================
Route::group(['middleware' => ['web']], function () {
    Route::get('/posts/home', [
        'uses' => 'PostController@home',
        'as' => 'posts'
    ]);
    Route::get('/posts/tracks/{id}', [
        'uses' => 'PostController@track',
        'as' => 'posts.track'
    ]);
    Route::get('/posts/createTrack', [
        'uses' => 'PostController@createTrack',
        'as' => 'posts.createTrack'
    ]);
    Route::get('/posts/editTrack/{id}', [
        'uses' => 'PostController@editTrack',
        'as' => 'posts.editTrack'
    ]);
    Route::get('/posts/createAlbum', [
        'uses' => 'PostController@createAlbum',
        'as' => 'posts.createAlbum'
    ]);
    Route::get('/posts/editAlbum/{id}', [
        'uses' => 'PostController@editAlbum',
        'as' => 'posts.editAlbum'
    ]);
    Route::resource('/posts', 'PostController');
    Route::resource('/posts/albums', 'AlbumController');
    Route::resource('/posts/tracks', 'SongController');
});

