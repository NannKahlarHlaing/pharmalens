@props(['news'])
<div {{ $attributes->merge(['class'=> "grid gird-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8"]) }} >
    @foreach ($news as $new)
        <x-wrappers.card class="border-custom-blue text-center">
            <div class="p-5 border-b border-custom-blue">
                <x-footers.footer-title class="truncate" name="{{ $new->title }}" />
                <div class="line-clamp ">{{ $new->slug }}</div>
            </div>

            <div class="p-3">
                <x-informations.button-more link="{{ route('news-detail', $new->id) }}" text="{{ __('lang.read_more') }}" />
            </div>
        </x-wrappers.card>
    @endforeach
</div>
