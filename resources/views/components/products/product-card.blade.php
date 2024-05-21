@props(['post'])
<x-wrappers.card class="relative">
    <img src="{{ asset('/storage/images/products/thumbnail/' . $post->image) }}" alt="" class="w-full h-72 z-0">
    <x-products.product-card-title class="px-4 pt-3 pb-4 w-full bg-opacity-30 text-center text-white absolute -mt-14 bg-black z-10" title="{{ $post->name }}" />
</x-wrappers.card>