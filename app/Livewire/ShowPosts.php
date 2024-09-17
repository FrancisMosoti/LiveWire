<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Posts;

class ShowPosts extends Component
{
    public function delete($id)
    {
        $post = Posts::findOrFail($id);
 
        // $this->authorize('delete', $post);
 
        $post->delete();
    }
 
    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Posts::all(),
        ])->title('Show Posts');
    }
}