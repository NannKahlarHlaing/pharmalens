@props(['title'])
<div {{ $attributes->merge(['class'=> "block text-xl lg:text-3xl text-center mt-5 mb-9 font-medium"]) }}>
    {{ $title }}
</div>