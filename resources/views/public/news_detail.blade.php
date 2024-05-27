<x-layout>
    <x-wrappers.banner>
        <img src="{{ asset('/storage/images/news/original/' . $new->image) }}" class="w-full md:h-md-custom lg:h-custom object-cover"  alt="">
    </x-wrappers.banner>

    <x-wrappers.container class="pb-9">
        <x-wrappers.page-title class="position-absolute -mt-16 text-white" title="{{ $new->name }}" />
        <div class="mt-14 w-full lg:max-w-[70%]">
            {!! $new->description !!}
        </div>
    </x-wrappers.container>
</x-layout>
