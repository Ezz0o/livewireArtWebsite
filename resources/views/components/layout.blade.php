<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Art Website</title>
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
	@livewireStyles
</head>
<body class="bg-gray-100 font-sans">

	@livewire('flash-message-component')
	
	<header class="bg-white border-b border-gray-200">
		<nav class="container mx-auto px-6 py-4">
			<div class="flex justify-between items-center">
				<div>
					<a href="/" class="text-lg font-semibold text-gray-800">Art Website</a>
				</div>
				<div class="flex items-center">
					<ul class="flex">
						<li><a href="/" class="px-4 py-2 text-gray-700 hover:text-gray-900">Feed</a></li>
						{{-- <li><a href="#" class="px-4 py-2 text-gray-700 hover:text-gray-900">Trending</a></li> --}}
						<li><a href="/create" class="px-4 py-2 text-gray-700 hover:text-gray-900">Create a post</a></li>
					</ul>
					@auth
					<ul class="flex ml-4">
						<li><p class="px-4 py-2 text-gray-700 hover:text-gray-900"> {{Auth::user()->name}} </p></li>
						<li class="self-center">
							<form method="POST" action="/logout" class="">
							@csrf
							<button type="submit">
								<i class="fa-solid fa-door-closed"></i> Logout
							</button>
							</form>
						</li>
					</ul>
					@else
					<ul class="flex ml-4">
						<li><a href="/login" class="px-4 py-2 text-gray-700 hover:text-gray-900">Login</a></li>
						<li><a href="/register" class="px-4 py-2 text-gray-700 hover:text-gray-900">Register</a></li>
					</ul>
					@endauth
				</div>
			</div>
		</nav>
	</header>
	{{$slot}}

	<footer class="bg-white border-t border-gray-200 w-full">
		<div class="container mx-auto px-6 py-4">
			<p class="text-gray-600">&copy; 2023 Art Website</p>
		</div>
	</footer>
	@livewireScripts
</body>
</html>