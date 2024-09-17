<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\ShowPosts;
use App\Livewire\SearchPosts;
use App\Livewire\TodoList;



Route::get('/', Counter::class);
Route::get('/posts', ShowPosts::class);
Route::get('/create-post', CreatePost::class);
Route::get('/to-do', TodoList::class);
Route::get('/search', SearchPosts::class);