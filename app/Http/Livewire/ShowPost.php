<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public Post $post;
    public function render()
    {
        // dd($this->post->image);
        return view('livewire.show-post');
    }
}
