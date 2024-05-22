<x-admins.layout>
    @if (session('success'))
        <x-success-alert />
    @endif
    <div class="max-w-xl">
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
            <input type="hidden" name="id" value="{{ is_object($post) ? $post->id : '' }}">
            @csrf
            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input id="phone" type="text" name="phone" :value="old('phone', (is_object($post) ? $post->phone : ''))" required />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="text" name="email" :value="old('email', (is_object($post) ? $post->email : ''))" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="address" :value="__('Address')" />
                <textarea name="address" class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 w-full" id="address" cols="30" rows="5">{{ old('address', (is_object($post) ? $post->address : '')) }}</textarea>
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="facebook" :value="__('Facebook Link')" />
                <x-text-input id="facebook" type="text" name="facebook" :value="old('facebook', (is_object($post) ? $post->facebook : ''))" />
                <x-input-error :messages="$errors->get('facebook')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="youtube" :value="__('Youtube Link')" />
                <x-text-input id="youtube" type="text" name="youtube" :value="old('youtube', (is_object($post) ? $post->youtube : ''))" />
                <x-input-error :messages="$errors->get('youtube')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="twitter" :value="__('Twitter Link')" />
                <x-text-input id="twitter" type="text" name="twitter" :value="old('twitter', (is_object($post) ? $post->twitter : ''))" />
                <x-input-error :messages="$errors->get('twitter')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="footer_text" :value="__('Footer')" />
                <x-text-input id="footer_text" type="text" name="footer_text" :value="old('footer_text', (is_object($post) ? $post->footer_text : ''))" required  />
                <x-input-error :messages="$errors->get('footer_text')" class="mt-2" />
            </div>

            <x-primary-button class="ms-4 mb-4 h-10">
                {{ __('Save') }}
            </x-primary-button>

        </form>
    </div>

</x-admins.layout>
