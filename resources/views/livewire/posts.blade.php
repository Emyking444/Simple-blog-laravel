<div>
    <form wire:submit.prevent="store">
        <input type="text" wire:model="title" placeholder="Title" required />
        <textarea wire:model="content" placeholder="Content" required></textarea>
        <input type="file" wire:model="image" />
        <button type="submit">Create Post</button>
    </form>

    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            @if ($post->image)
                <img src="{{ asset('storage/posts/' . $post->image) }}" width="100" />
            @endif
            <button wire:click="delete({{ $post->id }})">Delete</button>
        </div>
    @endforeach
</div>

