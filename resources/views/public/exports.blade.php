<x-layout>
    <x-wrappers.banner>
        <img src="{{ asset('images/patient-special-issue-probiotic-top.webp') }}" class="w-full h-96 object-cover"  alt="">
    </x-wrappers.banner>

    <x-wrappers.container>
        <x-wrappers.page-title class="position-absolute -mt-16 mb-16" title="Export Items" />
        <x-products.product-swiper :posts="$export_items" />
        <div class="mb-9">{{ $export_items->links() }}</div>
    </x-wrappers.container>
</x-layout>