<x-layout>
    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif
    <x-swipers.swiper-banner-slide />
    <x-wrappers.container>
        {{-- import items --}}
        <div class="flex items-center justify-between">
            <x-wrappers.page-title class="my-9" title="{{ __('lang.import_items') }}" />
            <x-informations.button-more link="{{ route('import-items') }}" text="{{ __('lang.view_more') }}" />
        </div>
        <x-products.product-swiper :posts="$import_items" />

        {{-- export items --}}
        <div class="max-w-screen-xl mx-auto py-4">
            <div class="flex items-center justify-between">
                <x-wrappers.page-title class="my-9" title="{{ __('lang.export_items') }}" />
                <x-informations.button-more link="{{ route('export-items') }}" text="{{ __('lang.view_more') }}" />
            </div>
            <x-products.product-swiper :posts="$exports" />
        </div>
    </x-wrappers.container>
    <div class="bg-custom-yellow">
        <x-wrappers.container class="pt-4 pb-10">
            <x-wrappers.page-title class="my-9 text-center" title="Company Profile" />
            <b>About Us:</b>
            <p>
                MediLife Pharmaceuticals is a leading global pharmaceutical company dedicated to improving health and well-being through the development, manufacturing, and commercialization of innovative medicines. With a relentless commitment to scientific excellence and patient-centricity, we strive to address unmet medical needs and make a meaningful difference in the lives of patients worldwide.
            </p><br>

            <b>
                Mission:
            </b>
            <p>
                Our mission is to discover, develop, and deliver high-quality pharmaceutical products that enhance and prolong human life. We aim to be a trusted partner in healthcare, providing innovative solutions that improve access to essential medicines and contribute to the overall well-being of communities.
            </p>
        </x-wrappers.container>
    </div>
    <x-wrappers.container class="pb-10">
        <div class="flex items-center justify-between">
            <x-wrappers.page-title class="my-9" title="{{ __('lang.news') }}" />
            <x-informations.button-more link="{{ route('news') }}" text="{{ __('lang.view_more') }}" />
        </div>
        <x-news.section :news="$news" />
    </x-wrappers.container>
</x-layout>
