<div>
    <h1 class="text-2xl font-bold">Create Blog Post</h1>

    @if(session()->has('message'))
        <div class="text-green-500">{{ session('message') }}</div>
    @endif

    <input type="text" wire:model="title" placeholder="Title" class="border p-2 w-full"><br>
    <textarea wire:model="content" placeholder="Content" class="border p-2 w-full"></textarea><br>
    <input type="file" wire:model="image"><br>

    <button wire:click="savePost" class="bg-blue-500 text-white px-4 py-2">Save</button>

    <h2 class="mt-5 text-xl">Recent Posts</h2>
    @foreach($posts as $post)
        <div class="border p-3 mt-2">
            <h3 class="text-lg font-bold">{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="w-32">
            @endif
        </div>
    @endforeach
</div>
