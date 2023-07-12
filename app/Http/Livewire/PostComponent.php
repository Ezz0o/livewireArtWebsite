<?php

namespace App\Http\Livewire;

use App\Models\Post as PostModel;
use Livewire\Component;

class PostComponent extends Component
{
    //Post component

    public PostModel $post;
    public function render()
    {
        return view('livewire.post-component');
    }
}
