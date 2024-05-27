<x-admins.layout>
    <div class=" max-w-xl">
        <x-wrappers.sub-title title="Edit New" />
        <form method="POST" action="{{ route('dashboard.news.update', $new->id) }}" enctype="multipart/form-data" >
        @csrf
        <div class="mb-4">
            <x-input-label for="title_en" :value="__('Title (English)')" />
            <x-text-input id="title_en" type="text" name="title_en" :value="old('title_en', $new->title_en)" required />
            <x-input-error :messages="$errors->get('title_en')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="title_mm" :value="__('Title (Myanmar)')" />
            <x-text-input id="title_mm" type="text" name="title_mm" :value="old('title_mm', $new->title)" required />
            <x-input-error :messages="$errors->get('title_mm')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="body_en" :value="__('Body (English)')" />
            <textarea name="body_en" class="summernote border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 w-full" cols="30" rows="10">{!! old('body_en', $new->body_en) !!}</textarea>
            <x-input-error :messages="$errors->get('body_en')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="body_mm" :value="__('Body Myanmar')" />
            <textarea name="body_mm" class="summernote border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 w-full" cols="30" rows="10">{!! old('body_mm', $new->body) !!}</textarea>
            <x-input-error :messages="$errors->get('body_mm')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="image" :value="__('Image')" />
            <x-text-input id="image" class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 h-10 w-full" type="file" name="image" :value="old('image')" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
            <div class="mt-2">
                <img src="{{ asset('/storage/images/news/thumbnail/' . $new->image) }}" alt="" width="100px" height="100px">
            </div>
        </div>
        
        <x-primary-button class="ms-4 h-10">
            {{ __('Update') }}
        </x-primary-button>

    </form>
    </div>

</x-admins.layout>
