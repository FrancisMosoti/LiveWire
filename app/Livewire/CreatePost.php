<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    
    public $title;
    public $body;
 
    public function save() 
    {
        $post = Post::create([
            'title' => $this->title,
            'body' => $this->body
        ]);
 
        return redirect()->to('/posts')
             ->with('status', 'Post created!');
    }

    
    public function render()
    {
        return view('livewire.create-post')->title('Create Post');;
    }
}