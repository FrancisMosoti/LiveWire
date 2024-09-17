<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Posts;

class SearchPosts extends Component
{

    public $query = '';
 
    #[Js] 
    public function resetQuery()
    {
        return <<<'JS'
            $wire.query = '';
        JS;
    }
    public function render()
    {
        return view('livewire.search-posts', [
            'posts' => Posts::whereTitle($this->query)->get(),
        ]);
    }
}