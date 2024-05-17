@props(['link', 'description'])
<a href="{{ $link }}" class="flex items-center">
    <x-informations.arrow-svg size="24" fill="#fff" />
    <div class="ms-3 my-1">{{ $description }}</div>
</a>