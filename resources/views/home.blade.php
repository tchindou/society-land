<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aplicalys | Externaliser votre comptabilité</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="antialiased relative flex flex-col">

    <nav id="navbar"
        class="flex h-14 w-full bg-white absolute top-0 z-50 opacity-85 backdrop-blur justify-between items-center">

        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"
            alt="" class="h-12">

        <div class="flex flex-row justify-between items-center w-[80%]">
            <ul class="flex flex-row justify-center items-center w-full bg-green-600">
            </ul>

            <button disabled type="button"
                class="text-white bg-teal-500 outline outline-blue-500 outline-2 outline-offset-2 font-medium rounded-lg text-sm px-5 py-2 text-center me-2  inline-flex items-center">

                Joindre
            </button>
        </div>

    </nav>

    <div class="relative h-full">
        <div class="relative flex h-screen w-full bg-center selection:bg-teal-500 selection:text-white">

            <div class="flex w-full h-[90%]">

                <img src="{{ asset('images/website/home.jpg') }}" alt="" class="w-full h-full">

                <div class="flex flex-col justify-center bg-black bg-opacity-80 absolute h-[90%] w-full">

                    <div class="relative flex flex-row justify-between text-white ml-5 sm:ml-8 sm:mr-5">
                        <span class="text-sm sm:text-lg text-white">Avec
                            <span class="text-4xl sm:text-8xl text-teal-500"> Aplicalys</span><br><br>
                            <span class="text-xl sm:text-3xl text-white font-semibold">Vos préoccupations sont nos
                                engagements</span>
                        </span>
                    </div>
                </div>

                <div
                    class="flex bg-white m-auto h-96 w-[95%] z-10 rounded-md absolute inset-0 transform translate-y-[85%] border border-spacing-1 border-gray-400">

                </div>
            </div>

        </div>
    </div>
    <div class="h-56">

    </div>
    <footer class="flex">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem molestiae, accusantium excepturi repudiandae quos
        assumenda quae enim aperiam id, sapiente repellendus tempore doloribus nobis non possimus voluptatem eos. Odio,
        fugiat.
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/js/app.js')
</body>

</html>
