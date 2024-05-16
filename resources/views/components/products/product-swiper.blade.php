<x-swipers.swiper class="product-swiper">
    @for ($i = 0; $i < 5; $i++)
        <x-products.product-slide />
    @endfor
</x-swipers.swiper>