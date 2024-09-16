<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{

    public $todos = [];
 
    public $todo = '';
 
    public function add()
    {
        // pull can reset and retrive in one operation
        $this->todos[] = $this->pull('todo'); 
        // $this->todos[] = $this->todo;
 
        // $this->todo = '';
        // $this->reset('todo');
    }
 
    public function render()
    {
        return view('livewire.todo-list')->title('Todo List');
    }
}