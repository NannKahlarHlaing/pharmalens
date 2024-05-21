@props(['posts'])

<x-swipers.swiper class="product-swiper" >
    @foreach ($posts as $post)
        <x-products.product-slide :post="$post" />
    @endforeach
</x-swipers.swiper>
