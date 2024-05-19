<x-admins.layout>
    <div class=" max-w-xl">
        <x-wrappers.sub-title title="Page Information" />
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form method="POST" action="">
        @csrf
        <!-- Name -->
        <div class="mb-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="text" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="facebook" :value="__('Facebook Link')" />
            <x-text-input id="facebook" type="text" name="facebook" :value="old('facebook')" required autocomplete="facebook" />
            <x-input-error :messages="$errors->get('facebook')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="youtube" :value="__('Youtube Link')" />
            <x-text-input id="youtube" type="text" name="youtube" :value="old('youtube')" required autocomplete="youtube" />
            <x-input-error :messages="$errors->get('youtube')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="twitter" :value="__('Twitter Link')" />
            <x-text-input id="twitter" type="text" name="twitter" :value="old('twitter')" required autocomplete="twitter" />
            <x-input-error :messages="$errors->get('twitter')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="footer_text" :value="__('Footer')" />
            <x-text-input id="footer_text" type="text" name="footer_text" :value="old('footer_text')" required autocomplete="footer_text" />
            <x-input-error :messages="$errors->get('footer_text')" class="mt-2" />
        </div>

        <x-primary-button class="ms-4 h-10">
            {{ __('Save') }}
        </x-primary-button>

    </form>
    </div>

</x-admins.layout>
