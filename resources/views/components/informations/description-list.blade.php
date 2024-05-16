@props(['title', 'description'])
<div class="flex ps-12 mb-4">
    <div class="me-7">
        <x-informations.arrow-svg size="40" />
    </div>
    <div class="">
        <div class="text-lg font-semibold">
            {{ $title }}
        </div>
        <div class="">
            {!!$description !!}
        </div>
    </div>
</div>