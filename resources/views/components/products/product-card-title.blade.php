@props(['title'])
<div {{ $attributes->merge(['class'=> "text-xl font-medium"]) }}>
    {{ $title }}
</div>