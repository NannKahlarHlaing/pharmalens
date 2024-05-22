@props(['title', 'description'])
<div {{$attributes->merge(['class' => 'flex mb-4'])}} class="">
    <div class="me-3 lg:me-7">
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
