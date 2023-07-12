<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        @if ($post->image)
        <div>
            <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="max-w-full max-h-full mx-auto">
        </div>

        @endif
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
            @if ($post->caption)
                <p class="text-lg text-gray-700 mb-4">{{ $post->caption }}</p>
            @endif
        </div>
    </div>
</div>