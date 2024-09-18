<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container d-flex justify-content-between">
                
              <a class="navbar-brand" >Navbar</a>
              
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/posts" wire:navigate.hover>Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/to-do" wire:navigate.hover>Todo List</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link " href="/create-post" wire:navigate.hover>Create Post</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
              
            </div>
          </nav>
        
        {{ $slot }}
    </body>
</html>
