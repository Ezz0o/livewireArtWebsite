<div>
    
    <form method="POST"  wire:submit.prevent='submit'>
        @csrf
        
        <div>
            @if (session()->has('message'))
            <div class="fixed top-0 right-1/3 mb-4 mr-4 z-50">
                  <div class="bg-white rounded-md shadow-md p-4 w-64">
                    <p class="font-medium text-red-800">{{session('message')}}</p>
                  </div>
            </div>
        @endif
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" wire:model='email' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-bold mb-2">{{ __('Password') }}</label>
            <input id="password" type="password" wire:model='password' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('Login') }}
            </button>
        </div>
    </form>
</div>
