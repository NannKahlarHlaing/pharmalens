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
            <form method="POST" action="" >
            @csrf
            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" type="text" name="title" :value="old('title')" required  />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="short_desc" :value="__('Short Descriptionn')" />
                <textarea name="short_desc" class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 p-2 w-full" cols="30" rows="3" required>{{ old('short_desc') }}</textarea>                
                <x-input-error :messages="$errors->get('short_desc')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="body" :value="__('Body')" />
                <textarea name="body" class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 w-full" id="summernote" cols="30" rows="10">{{ old('body') }}</textarea>
                <x-input-error :messages="$errors->get('body')" class="mt-2" />
            </div>

            <x-primary-button class="ms-4 h-10">
                {{ __('Create') }}
            </x-primary-button>

        </form>
        </div>

</x-admins.layout>
