<x-admins.layout>
        <div class=" max-w-xl">
            <x-wrappers.sub-title title="Create New" />
            <form method="POST" action="" >
            @csrf
            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="title" :value="__('Name (English)')" />
                <x-text-input id="title" type="text" name="title" :value="old('title')" required autocomplete="title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="body" :value="__('Body')" />
                <textarea name="body" class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 w-full" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
                <x-input-error :messages="$errors->get('body')" class="mt-2" />
            </div>
            
            {{-- <div class="mb-4">
                <x-input-label for="email" :value="__('Image')" />
                <x-text-input id="image" class="block mt-1 px-2 h-10 w-full" type="file" name="image" :value="old('image')" />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div> --}}

            <x-primary-button class="ms-4 h-10">
                {{ __('Create') }}
            </x-primary-button>

        </form>
        </div>

</x-admins.layout>
