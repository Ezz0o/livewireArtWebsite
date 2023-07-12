<div>
    <form method="POST"  wire:submit.prevent='submit'>
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">{{ __('Name') }}</label>
            <input id="name" type="text" wire:model='name' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
            @enderror
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

        <div class="mb-6">
            <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" wire:model='password_confirmation' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="mb-4">
            <label for="gender" class="block text-gray-700 font-bold mb-2">{{ __('Gender') }}</label>
            <select id="gender" wire:model='gender' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('gender') border-red-500 @enderror" name="gender" required>
                <option value=""  selected>Select gender</option>
                <option value="male" @if(old('gender') == 'male') selected @endif>Male</option>
                <option value="female" @if(old('gender') == 'female') selected @endif>Female</option>
                <option value="other" @if(old('gender') == 'other') selected @endif>Other</option>
            </select>
            @error('gender')
                <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="birth_date" class="block text-gray-700 font-bold mb-2">{{ __('Birth date') }}</label>
            <input id="birth_date" type="date" wire:model='birth_date' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('birthdate') border-red-500 @enderror" name="birthdate" value="{{ old('birthdate') }}" required>
            @error('birth_date')
                <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="bio" class="block text-gray-700 font-bold mb-2">{{ __('Bio') }}</label>
            <textarea id="bio" wire:model='bio' class="shadow appearance-none borderrounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="bio" rows="3">{{ old('bio') }}</textarea>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
