<div>
    <form method="POST" wire:submit.prevent='submit' action="/posts" enctype="multipart/form-data" class="w-full max-w-lg mx-auto">
        @csrf
    
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="title">
                Title
            </label>
            <input wire:model='title' class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                id="title" type="text" name="title" placeholder="Enter post title" required>
            @error('title')
                <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="caption">
                Caption
            </label>
            <textarea wire:model='caption' class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                id="caption" name="caption" placeholder="Enter post caption"></textarea>
            @error('caption')
                <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
            @enderror
            </div>
    
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="image">
                Image
            </label>
            <input wire:model='image' class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="image" type="file" accept="image/*" name="image">
            @error('image')
                <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                type="submit">
                Create Post
            </button>
        </div>
    </form>
</div>