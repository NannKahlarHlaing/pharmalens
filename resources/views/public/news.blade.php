<x-layout>
    <x-wrappers.banner>
        <img src="{{ asset('images/patient-special-issue-probiotic-top.webp') }}" class="w-full h-96 object-cover"  alt="">
    </x-wrappers.banner>
    <x-wrappers.container class="pb-9">
        <x-wrappers.page-title class="position-absolute -mt-16" title="{{ __('lang.news') }}" />
        <x-news.section class="mt-16" :news="$news" />
    </x-wrappers.container>
</x-layout>
