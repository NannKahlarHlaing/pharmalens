<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/css/app.css')

    {{-- swiper start --}}
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    {{-- swiper end --}}

    {{-- flowbite start --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    {{-- flowbite end --}}

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    
</head>
<body class="bg-custom-white">
    <x-navbar />
    {{ $slot }}
    <x-footer-section />

    {{-- tailwind modal --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
 
    {{-- swiper js start --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script>
        // banner swiper start
        const swiper = new Swiper('.banner-swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        autoplay: {
            delay: 3000, // Delay between slides in milliseconds (5 seconds in this example)
            disableOnInteraction: false, // Enable autoplay even if user interacts with swiper
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        // scrollbar: {
        //     el: '.swiper-scrollbar',
        // },
        });

        // banner swiper end

         // product swiper start 
         swiperTwo = new Swiper('.product-swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            // autoplay: {
            //     delay: 4000,
            //     disableOnInteraction: false,
            // },
            pagination: {
                    el: '.swiper-pagination',
                },
            // Set the number of slides to show at a time
            slidesPerView: 4,
            spaceBetween: 32,
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    // product swiper end 

    </script>

    {{-- swiper js end --}}
</body>
</html>