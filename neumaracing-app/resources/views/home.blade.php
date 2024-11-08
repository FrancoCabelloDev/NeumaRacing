<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neuma Racing</title>
    <link rel="icon" href="{{asset("img/logos/icono.jpeg")}}" type="image/x-icon"/>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Nav Principal Componente -->
    <x-nav> </x-nav>
    <!-- Sección de Bienvenida -->
    <section class="relative bg-gray-100 mt-[210px]"> <!-- Ajusta este valor según el espacio necesario -->
        <div class="relative z-10 container mx-auto py-24 flex flex-col items-center text-center">
            <h1 class="text-5xl font-extrabold tracking-wide">
                Bienvenidos a <span class="text-red-500">Neuma Racing</span>
            </h1>
            <p class="mt-6 text-lg max-w-2xl text-gray-700 mb-6">
                Innovamos en cada giro de tu rueda con <span class="text-red-500">aros</span>, 
                <span class="text-red-500">llantas</span> y <span class="text-red-500">baterías</span> 
                de alta calidad para mantener tu vehículo al máximo rendimiento.
            </p>
    
            <!-- Carrusel de Imágenes -->
            <div class="w-full max-w-4xl mx-auto py-8">
        
                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <!-- Carrusel de Imágenes -->
                    <div id="carouselSlides" class="flex transition-transform duration-500 ease-in-out">
                        <!-- Imagen 1 -->
                        <div class="flex-none w-full">
                            <img src="{{asset("img/bateriaenerjet.avif")}}" alt="Imagen 1" class="w-full h-full object-cover">
                        </div>
                        <!-- Imagen 2 -->
                        <div class="flex-none w-full">
                            <img src="{{asset("img/trianglellantas.jpg")}}" alt="Imagen 2" class="w-full h-full object-cover">
                        </div>
                        <!-- Imagen 3 -->
                        <div class="flex-none w-full">
                            <img src="{{asset("img/dunlopllantas.jpg")}}" alt="Imagen 3" class="w-full h-full object-cover">
                        </div>
                        <!-- Imagen 4 -->
                        <div class="flex-none w-full">
                            <img src="{{asset("img/westlake.jpg")}}" alt="Imagen 4" class="w-full h-full object-cover">
                        </div>
                    </div>                               
                    <!-- Botones de Navegación -->
                    <button onclick="moveSlide(-1)" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full hover:bg-gray-700">
                        &#10094;
                    </button>
                    <button onclick="moveSlide(1)" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full hover:bg-gray-700">
                        &#10095;
                    </button>
                </div>
            </div>
            
            <div class="mt-10 space-x-6">
                <a href="#" class="bg-red-500 hover:bg-red-600 text-white px-6 py-3 rounded-lg text-lg transition">
                    Ver Productos
                </a>
                <a href="https://maps.app.goo.gl/eom2ckWfijALyykf6" class="text-red-500 hover:text-red-400 border border-red-500 hover:border-red-400 px-6 py-3 rounded-lg text-lg transition">
                    Ubícanos en nuestra tienda Física
                </a>
            </div>
        </div>
    </section>
<!-- Footer componente -->
<x-footer></x-footer>

@vite("resources/js/carrusel.js")
</body>
</html>
