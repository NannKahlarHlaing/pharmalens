<div {{ $attributes->merge(['class'=> "grid grid-cols-4 gap-8"]) }} >
    @for ($i = 0; $i < 4; $i++)
        <x-wrappers.card class="border-custom-blue text-center">
            <div class="p-5 border-b border-custom-blue">
                <x-footers.footer-title class="" name="Certificate of Honor" />
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum modi deserunt dolorem
            </div>

            <div class="p-3">
                <a href="" class="flex items-center justify-center hover:font-bold hover:text-custom-blue">
                    <span class="me-2">Read More</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                        <path fill="#466B73" d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM294.6 135.1c-4.2-4.5-10.1-7.1-16.3-7.1C266 128 256 138 256 150.3V208H160c-17.7 0-32 14.3-32 32v32c0 17.7 14.3 32 32 32h96v57.7c0 12.3 10 22.3 22.3 22.3c6.2 0 12.1-2.6 16.3-7.1l99.9-107.1c3.5-3.8 5.5-8.7 5.5-13.8s-2-10.1-5.5-13.8L294.6 135.1z" stroke="" />
                    </svg>
                 </a>
            </div>
        </x-wrappers.card>
    @endfor
</div>
