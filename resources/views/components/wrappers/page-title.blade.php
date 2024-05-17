@props(['title'])
<div {{ $attributes->merge(['class'=> "text-4xl font-bold uppercase z-10"]) }} >
    {{ $title }}
</div>