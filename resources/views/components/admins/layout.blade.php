<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandhi Brothers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    @vite('resources/css/app.css')
    <style>
        .line-clamp {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            max-width: 70ch; 
        }

    </style>
</head>

<body class="bg-gray-200 text-custom-black">
    <nav class="bg-white border-b border-gray-300">
        <div class="flex justify-between items-center px-9">
            <div class="">
                <a href="/" class="py-2 flex items-center space-x-4">
                    <x-application-logo class="w-24 fill-current text-gray-500" />
                    <x-wrappers.page-title title="{{ env('APP_NAME') }}" />
                </a>
            </div>
            <div class="space-x-4">
                {{-- <button>
                    <i class="fas fa-bell text-cyan-500 text-lg"></i>
                </button> --}}

                {{-- <button>

                </button> --}}
                <div class="space-x-2"><i class="fas fa-user text-custom-black text-lg"></i> {{ ucwords(auth()->user()->name)  }}</div>
            </div>
        </div>
    </nav>
    <div class="flex">
        <x-admins.sidebar />
        <div class="lg:px-8 lg:flex lg:flex-col mt-5 w-full mb-9">
            {{ $slot }}
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script  -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>

        // Agregar lógica para mostrar/ocultar la navegación lateral al hacer clic en el ícono de menú
        // const menuBtn = document.getElementById('menuBtn');
        // const sideNav = document.getElementById('sideNav');

        // menuBtn.addEventListener('click', () => {
        //     sideNav.classList.toggle('hidden');
        // });
        $('.summernote').summernote({
        placeholder: 'Please Enter Note',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });

    </script>

</body>

</html>
