<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class MakePostForm extends Component
{

    use WithFileUploads;
    public $title, $caption, $image;
    protected $rules = [
        'title' => 'required',
        'caption' => 'min:8',
        'image' => 'file|image|nullable'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(Request $request)
    {
        $fields = $this->validate();
        
        //if validation fails, this won't execute

        //should be it's own function probably
        if($fields['image']) { 
            $fields['image'] = $this->image->store('images/' . Auth::user()->name . '/art');
        }

        $post = new Post();
        $post->title = $fields['title'];
        if($fields['caption']) {
            $post->caption = $fields['caption'];
        }
        if($fields['image']) {
          $post->image = $fields['image'];
        }
        $post->owner_id = Auth::id();
        $post->save();

        if($post)
            return redirect('/posts'. '/' . $post->id);
        else
            session()->flash('message', 'Something wrong happened. Make sure you have no validation errors');
    }
    
    public function render()
    {
        return view('livewire.make-post-form');
    }
}
