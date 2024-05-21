<x-layout>
    <x-wrappers.banner>
        <img src="{{ asset('images/patient-special-issue-probiotic-top.webp') }}" class="w-full h-96 object-cover"  alt="">
    </x-wrappers.banner>

    <x-wrappers.container>
        <x-wrappers.page-title class="position-absolute -mt-16 mb-16" title="Herb Powder" />
        <x-products.product-swiper :posts="$herb_powders" />
        <div class="mb-9">{{ $herb_powders->links() }}</div>
    </x-wrappers.container>
</x-layout>
