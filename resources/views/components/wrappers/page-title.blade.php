@props(['title'])
<div {{ $attributes->merge(['class'=> "text-xl lg:text-3xl font-bold uppercase z-10"]) }} >
    {{ $title }}
</div>
