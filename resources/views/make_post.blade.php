<x-layout>
        <div class="flex justify-center items-center h-full mt-4">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-md w-full">
                <h2 class="text-2xl mb-6 text-center">{{ __('Create a post') }}</h2>
                @livewire('make-post-form')
            </div>
        </div>
</x-layout>