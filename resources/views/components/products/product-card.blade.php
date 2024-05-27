@props(['post'])
<x-wrappers.card class="">

    {{-- <img src="{{ asset('/storage/images/products/thumbnail/' . $post->image) }}" alt="" class="w-full h-72 z-0">
    <x-products.product-card-title class="px-4 pt-3 pb-4 w-full bg-opacity-30 text-center text-white absolute -mt-14 bg-black z-10" title="{{ $post->name }}" /> --}}
    <a href="{{ route('product-detail', $post->id) }}">
        <figure class="relative max-w-sm transition-all duration-300 filter">
            <img class="rounded-lg" src="{{ asset('/storage/images/products/thumbnail/' . $post->image) }}" alt="image description">
            <figcaption class="absolute px-4 py-3 w-full bg-opacity-30 bg-black text-center text-lg text-white bottom-0">
                <p>{{ $post->name }}</p>
            </figcaption>
        </figure>
    </a>
    
</x-wrappers.card>

