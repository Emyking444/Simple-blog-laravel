<?php
namespace App\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post;


class Blog extends Component
{
    use WithFileUploads;

    public $title, $content, $image;

    public function savePost()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|max:1024',
        ]);

        $imagePath = $this->image->store('posts', 'public');

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'image' => $imagePath,
        ]);

        session()->flash('message', 'Post created successfully!');
    }

    public function render()
    {
        return view('livewire.blog', [
            'posts' => Post::latest()->get(),
        ]);
    }
}