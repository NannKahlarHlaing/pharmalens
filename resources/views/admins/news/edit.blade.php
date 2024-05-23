<x-admins.layout>
    <div class=" max-w-xl">
        <x-wrappers.sub-title title="Edit New" />
        <form method="POST" action="{{ route('dashboard.news.update', $new->id) }}"  >
        @csrf
        <!-- Name -->
        <div class="mb-4">
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" type="text" name="title" :value="old('title', $new->title)" required autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="short_desc" :value="__('Short Descriptionn')" />
            <textarea name="short_desc" class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 p-2 w-full" cols="30" rows="3">{{ old('short_desc', $new->slug) }}</textarea>                <x-input-error :messages="$errors->get('short_desc')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="body" :value="__('Body')" />
            <textarea name="body" class=" border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm block mt-1 px-2 w-full" id="summernote" cols="30" rows="10">{!! old('body', $new->body) !!}</textarea>
            <x-input-error :messages="$errors->get('body')" class="mt-2" />
        </div>
        
        <x-primary-button class="ms-4 h-10">
            {{ __('Update') }}
        </x-primary-button>

    </form>
    </div>

</x-admins.layout>
