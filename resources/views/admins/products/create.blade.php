<x-admins.layout>
        <div class=" max-w-xl">
            <x-wrappers.sub-title>Create Product</x-wrappers.sub-title>
            <form method="POST" action="">
            @csrf
            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name" :value="__('Name (English)')" />
                <x-text-input id="name" class="block mt-1 px-2 h-10 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="name" :value="__('Name (Myanmar)')" />
                <x-text-input id="name" class="block mt-1 px-2 h-10 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 px-2 h-10 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <x-primary-button class="ms-4 h-10">
                {{ __('Create') }}
            </x-primary-button>
            
        </form>
        </div>
    
</x-admins.layout>
