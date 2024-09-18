<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\PostForm;
use Livewire\Attributes\Validate; 
use Livewire\WithFileUploads;
use App\Models\Posts;

class CreatePost extends Component
{
    use WithFileUploads;
    // public PostForm $form;
    #[Validate('required', message: 'Please provide a title for the post!')]
    public $title;
 
    #[Validate('required')]
    #[Validate('min:5', message:'Your post content is too short!')]
    public $content;
    
    #[Validate('required', message: 'Please Provide a photo for your post!')]
    public $photo;
    
    
    public function save() 
    {
        $this->validate();
        
        // $this->photo->store(path: 'photos');
        
        $post = Posts::create( $this->pull());
        
        session()->flash('status', 'Post successfully updated.');
 
        return $this->redirect('/posts', navigate:true);
    }
    
    public function render()
    {
        return view('livewire.create-post')->title('Create Post');;
    }
}