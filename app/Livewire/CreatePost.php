<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate; 
use App\Models\Posts;

class CreatePost extends Component
{
    #[Validate('required')]
    public $title;
 
    #[Validate('required')]
    public $content;

    public function save() 
    {
        $this->validate();
        
        $post = Posts::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);
        session()->flash('status', 'Post successfully updated.');
 
        return redirect()->to('/posts')
             ->with('status', 'Post created!');
    }
    
    public function render()
    {
        return view('livewire.create-post')->title('Create Post');;
    }
}