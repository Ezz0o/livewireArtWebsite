<x-layout>

	<main class="container mx-auto my-8">
		<h1 class="text-3xl font-semibold text-gray-800">Welcome to Art Website</h1>
		<p class="mt-4 text-gray-600">Explore and share your favorite artwork with our community.</p>
		<p class="text-gray-600">Start by browsing our collection of inspiring artworks or sharing your own art pieces with the world.</p>
	</main>
	
	@isset($posts)
	<div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-3 mx-auto my-4">
		@foreach ($posts as $post)
			@livewire('post-component', ['post' => $post], key($post->id))
		@endforeach	
	</div>
	@else
	<br> <br>
	<h1 class='text-center text-gray-800 font-semibold text-2xl'>No posts have been made yet 😞 but you could be the one to start it all!</h1>
	@endisset
	
	
</x-layout>

	