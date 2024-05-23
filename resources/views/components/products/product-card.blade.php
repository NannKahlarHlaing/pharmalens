@props(['post'])
<x-wrappers.card class="relative">

    {{-- <img src="{{ asset('/storage/images/products/thumbnail/' . $post->image) }}" alt="" class="w-full h-72 z-0">
    <x-products.product-card-title class="px-4 pt-3 pb-4 w-full bg-opacity-30 text-center text-white absolute -mt-14 bg-black z-10" title="{{ $post->name }}" /> --}}
    <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter pointer-events-none">
        <img class="rounded-lg" src="{{ asset('/storage/images/products/thumbnail/' . $post->image) }}" alt="image description">
        <figcaption class="absolute px-4 pb-4 w-full bg-opacity-30 bg-black text-center text-lg text-white bottom-0">
            <p>{{ $post->name }}</p>
        </figcaption>
    </figure>

    {{-- <button data-modal-target="inquiry" data-modal-toggle="inquiry" class="" type="button">
        <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter pointer-events-none">
            <img class="rounded-lg" src="{{ asset('/storage/images/products/thumbnail/' . $post->image) }}" alt="image description">
            <figcaption class="absolute px-4 pb-4 w-full bg-opacity-30 bg-black text-center text-lg text-white bottom-0">
                <p>{{ $post->name }}</p>
            </figcaption>
        </figure>
    </button> --}}


</x-wrappers.card>