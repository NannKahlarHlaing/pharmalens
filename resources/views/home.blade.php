<x-layout>
    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif
    <x-swipers.swiper-banner-slide />
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <x-products.product-swiper />
    </div>
</x-layout>