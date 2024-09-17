<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Posts;

class CreatePost extends Component
{
    
    public $title;
 
    public $content;

    public function save() 
    {
        $post = Posts::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);
 
        return redirect()->to('/posts')
             ->with('status', 'Post created!');
    }
    
    public function render()
    {
        return view('livewire.create-post')->title('Create Post');;
    }
}