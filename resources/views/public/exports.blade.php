<x-layout>
    <x-wrappers.banner>
        <img src="{{ asset('images/patient-special-issue-probiotic-top.webp') }}" class="w-full h-96 object-cover"  alt="">
    </x-wrappers.banner>

    <x-wrappers.container>
        <x-wrappers.page-title class="position-absolute -mt-16 mb-16" title="{{ __('lang.export_items') }}" />
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-9">
            @foreach($export_items as $post)
                <x-products.product-card :post="$post" />
            @endforeach
        </div>
        <div class="mb-9">{{ $export_items->links() }}</div>
    </x-wrappers.container>
</x-layout>
