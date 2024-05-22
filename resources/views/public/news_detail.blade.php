<x-layout>
    <x-wrappers.banner>
        <img src="{{ asset('images/patient-special-issue-probiotic-top.webp') }}" class="w-full h-96 object-cover"  alt="">
    </x-wrappers.banner>

    <x-wrappers.container class="pb-9">
        <x-wrappers.page-title class="position-absolute -mt-16" title="{{ $new->title }}" />
        <div class="mt-14 w-full lg:max-w-[70%]">
            {!! $new->body !!}
        </div>
    </x-wrappers.container>
</x-layout>
