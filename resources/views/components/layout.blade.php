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
<body class="bg-custom-white text-custom-black">
    <span class="hidden" id="language">{{ app()->getLocale() }}</span>
    <x-navbar />
    {{ $slot }}
    <x-footer-section />

    {{-- tailwind modal --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- swiper js start --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script>
        var slidePerPage = 4;
        var swiperTwo;

        // banner swiper start
        const swiper = new Swiper('.banner-swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            // pagination: {
            //     el: '.swiper-pagination',
            // },

            // autoplay: {
            //     delay: 3000,
            //     disableOnInteraction: false, 
            // },

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
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                    el: '.swiper-pagination',
                },
            // Set the number of slides to show at a time
            // slidesPerView: 2,
            spaceBetween: 32,
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                426: {
                slidesPerView: 2,
                // spaceBetween: 32,
                },
                769: {
                slidesPerView: 4,
                // spaceBetween: 32,
                },
                
            },
        });
    // product swiper end

    // swiper js end
    $(document).ready(function(){
        var appUrl = '{{ $app_url }}';
        var lang = $('#language').text();

        $('#lang').on('click', function(event) {
            event.preventDefault();
            var currentUrl = window.location.href;
            var urlObject = new URL(currentUrl);
            var pathSegments = urlObject.pathname.split('/').filter(segment => segment);

            if (lang === 'en') {
                // Add 'mm' as a prefix to each path segment and to the path itself
                var newPathSegments = pathSegments.map(function(segment) {
                    return segment === '' ? '' : 'mm/' + segment;
                });
                pathSegments.splice(0, 0, 'mm');  // Ensure 'mm' is at the beginning of the path
                urlObject.pathname = '/' + pathSegments.join('/');
            } else if (lang === 'mm') {
                // Remove 'mm' from the path if it exists
                if (pathSegments[0] === 'mm') {
                    pathSegments.splice(0, 1);
                }
                urlObject.pathname = '/' + pathSegments.join('/');
            }

            window.location.href = urlObject.href;
        });

        $('#feedback-form').submit(function(event) {
            event.preventDefault(); 
            var formData = $('#feedback-form').serialize();

            $('.loading-message').show();
            $('#feedback-form').hide();

            $.ajax({
                url: '{{ route('feedback-mail')}}',
                type: 'POST',
                data: formData,
                success:function(response)
                {
                    if (response.success) {
                        location.reload();
                    }else if(response.errors){
                        $('.loading-message').hide();
                        $('#feedback-form').show();
                        errors =  response.errors;
                        if(errors.name){
                            $('#name-error').text(errors.name);
                        }
                        if(errors.phone){
                            $('#phone-error').text(errors.phone);
                        }
                        if(errors.message){
                            $('#feedback_message-error').text(errors.message);
                        }
                    }
                },
                error: function(response) {
                    console.log(response)
                }
            });
        });

        $('#complaint-form').submit(function(event) {
            event.preventDefault(); 
            var formData = $('#complaint-form').serialize();

            $('.loading-message').show();
            $('#complaint-form').hide();

            $.ajax({
                url: '{{ route('complaint-mail')}}',
                type: 'POST',
                data: formData,
                success:function(response)
                {
                    if (response.success) {
                        location.reload();
                    }else if(response.errors){
                        $('.loading-message').hide();
                        $('#complaint-form').show();
                        errors =  response.errors;
                        if(errors.name){
                            $('#username-error').text(errors.name);
                        }
                        if(errors.phone){
                            $('#userphone-error').text(errors.phone);
                        }
                        if(errors.email){
                            $('#useremail-error').text(errors.email);
                        }
                        if(errors.message){
                            $('#complaint_message-error').text(errors.message);
                        }
                    }
                },
                error: function(response) {
                    console.log('responseerror' + response)
                }
            });
        });

        $('#inquiry-form').submit(function(event) {
            event.preventDefault(); 
            var formData = $('#inquiry-form').serialize();

            $('.loading-message').show();
            $('#inquiry-form').hide();

            $.ajax({
                url: '{{ route('inquiry-mail')}}',
                type: 'POST',
                data: formData,
                success:function(response)
                {
                    if (response.success) {
                        location.reload();
                    }else if(response.errors){
                        $('.loading-message').hide();
                        $('#inquiry-form').show();
                        errors =  response.errors;
                        if(errors.name){
                            $('#cusname-error').text(errors.name);
                        }
                        if(errors.company){
                            $('#company-error').text(errors.name);
                        }
                        if(errors.phone){
                            $('#cusphone-error').text(errors.phone);
                        }
                        if(errors.email){
                            $('#cusemail-error').text(errors.email);
                        }
                        if(errors.commodity){
                            $('#commodity-error').text(errors.commodity);
                        }
                        if(errors.quantity){
                            $('#quantity-error').text(errors.quantity);
                        }
                        if(errors.message){
                            $('#inquiry_message-error').text(errors.message);
                        }
                    }
                },
                error: function(response) {
                    console.log('responseerror' + response)
                }
            });
        });


    });

    </script>
</body>
</html>
