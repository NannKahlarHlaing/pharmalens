<x-layout>
    <x-wrappers.banner>
        <img src="{{ asset('images/patient-special-issue-probiotic-top.webp') }}" class="w-full h-96 object-cover"  alt="">
    </x-wrappers.banner>

    <x-wrappers.container>
        <x-wrappers.page-title class="position-absolute -mt-16 mb-16" title="{{ __('lang.import_items') }}" />
        <x-products.product-swiper :posts="$import_items" />
    </x-wrappers.container>
</x-layout>
