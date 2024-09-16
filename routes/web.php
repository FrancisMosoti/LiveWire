<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\TodoList;


Route::get('/', Counter::class);
Route::get('/create-post', CreatePost::class);
Route::get('/to-do', TodoList::class);