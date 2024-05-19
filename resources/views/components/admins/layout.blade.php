<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandhi Brothers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

</head>

<body class="bg-gray-200 ">
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
                <div class="space-x-2"><i class="fas fa-user text-cyan-500 text-lg"></i> {{ ucwords(auth()->user()->name)  }}</div>
            </div>
        </div>
    </nav>
    <div class="flex">
        <x-admins.navbar />
        <div class="lg:px-8 lg:flex lg:flex-col mt-5 w-full">
            {{ $slot }}
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script  -->
    <script>

        // Agregar lógica para mostrar/ocultar la navegación lateral al hacer clic en el ícono de menú
        // const menuBtn = document.getElementById('menuBtn');
        // const sideNav = document.getElementById('sideNav');

        // menuBtn.addEventListener('click', () => {
        //     sideNav.classList.toggle('hidden');
        // });
    </script>
</body>

</html>
