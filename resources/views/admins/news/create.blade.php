<x-admins.layout>
        <div class=" max-w-xl">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <x-wrappers.sub-title title="Create New" />
            <form method="POST" action="" enctype="multipart/form-data" >
            @csrf
            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="title_en" :value="__('Title (English)')" />
                <x-text-input id="title_en" type="text" name="title_en" :value="old('title_en')" required  />
                <x-input-error :messages="$errors->get('title_en')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="title_mm" :value="__('Title (Myanmar)')" />
                <x-text-input id="title_mm" type="text" name="title_mm" :value="old('title_mm')" required  />
                <x-input-error :messages="$errors->get('title_mm')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="body_en" :value="__('Body (English)')" />
                <textarea name="body_en" class="summernote border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 w-full"  cols="30" rows="10">{{ old('body_en') }}</textarea>
                <x-input-error :messages="$errors->get('body_en')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="body_mm" :value="__('Body (Myanmar)')" />
                <textarea name="body_mm" class="summernote border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 w-full"  cols="30" rows="10">{{ old('body_mm') }}</textarea>
                <x-input-error :messages="$errors->get('body_mm')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="image" :value="__('Image')" />
                <x-text-input id="image" class="block mt-1 px-2 h-10 w-full" type="file" name="image" :value="old('image')"  />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>

            <x-primary-button class="ms-4 h-10">
                {{ __('Create') }}
            </x-primary-button>

        </form>
        </div>

</x-admins.layout>
