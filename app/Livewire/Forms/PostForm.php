<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate('required')]
    public $title;
 
    #[Validate('required')]
    public $content;
}