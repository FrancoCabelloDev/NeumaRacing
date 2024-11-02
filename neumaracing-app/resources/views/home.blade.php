<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neuma Racing</title>
    <link rel="icon" href="{{asset("img/icono.jpeg")}}" type="image/x-icon"/>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Top nav-bar -->
    <div id="top-bar" class="bg-amber-300 text-black flex justify-end items-center px-6 py-1 fixed top-0 left-0 w-full z-50 transition-transform duration-100">
        <div class="flex items-center space-x-14">
            <div class="flex items-center space-x-2">
                <a href="#" class="flex items-center space-x-2">
                    <img src="{{ asset('img/email.svg') }}" alt="Email" class="h-6 w-6">
                    <span class="font-bold">jcnllantas@gmail.com</span>
                </a>
            </div>
            <div class="flex items-center space-x-0">
                <a href="https://wa.me/+51948464266" class="flex items-center space-x-0">
                    <img src="{{ asset('img/whatsapp.png') }}" alt="Whatsapp" class="h-8 w-8">
                    <span class="font-bold">+51 948 464 266</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Nav Principal y Sección de Filtros -->
    <div id="nav-container" class="fixed top-[36px] left-0 w-full z-40 bg-white shadow-lg transition-transform duration-300">
        <!-- Nav Principal -->
        <nav id="main-nav" class="bg-black text-white flex items-center justify-between px-6 py-4">
            <div class="flex items-center space-x-4">
                <a href="#">
                    <img src="{{ asset('img/LogoNav.png') }}" alt="Neuma Racing" class="h-12">
                </a>
            </div>
            <div class="flex justify-center flex-1">
                <div class="relative w-96">
                    <label for="search-input" class="absolute left-3 top-1/2 transform -translate-y-1/2 cursor-text">
                        <img src="{{ asset('img/lupa.png') }}" alt="Buscar" class="h-5 w-5" />
                    </label>
                    <input 
                        id="search-input"
                        type="text" 
                        placeholder="Buscar" 
                        class="w-full pl-12 pr-4 py-2 rounded-full bg-custom-gray text-white 
                            placeholder-gray-400 focus:outline-none 
                            hover:bg-white hover:bg-opacity-20 transition-colors duration-200"
                    />
                </div>
            </div>
            <div class="flex items-center space-x-6">
                <a href="#" class="flex items-center space-x-1 hover:text-gray-400">
                    <img src="{{ asset('img/person.png') }}" alt="Persona">
                    <span>Ingresar</span>
                </a>
                <a href="#" class="flex items-center space-x-2 hover:text-gray-400">
                    <img src="{{ asset('img/carrito.png') }}" alt="Carrito">
                    <span>Carrito</span>
                </a>
            </div>
        </nav>

        <!-- Sección de Filtros, pegada al Nav Principal -->
        <section id="filters-section" class="bg-white border-t border-b border-gray-400">
            <div class="grid grid-cols-4 gap-0">
                <a href="#" class="flex flex-col items-center justify-center relative group transition-all duration-300 h-24 bg-white hover:bg-gray-100">
                    <img src="{{ asset('img/automovil.png') }}" alt="Automóvil" class="h-12 w-12">
                    <span class="mt-2 text-black font-semibold">AUTOMÓVIL</span>
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-red-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center relative group transition-all duration-300 h-24 bg-white hover:bg-gray-100">
                    <img src="{{ asset('img/suv.png') }}" alt="Automóvil" class="h-12 w-12">
                    <span class="mt-2 text-black font-semibold">SUV / CROSSOVER</span>
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-red-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center relative group transition-all duration-300 h-24 bg-white hover:bg-gray-100">
                    <img src="{{ asset('img/camioneta.png') }}" alt="Automóvil" class="h-12 w-12">
                    <span class="mt-2 text-black font-semibold">CAMIONETAS</span>
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-red-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center relative group transition-all duration-300 h-24 bg-white hover:bg-gray-100">
                    <img src="{{ asset('img/vans.png') }}" alt="Automóvil" class="h-12 w-12">
                    <span class="mt-2 text-black font-semibold">VANS / COMERCIALES LIGEROS</span>
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-red-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </a>
            </div>
        </section>
    </div>

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
            <div class="w-full max-w-2xl mx-auto py-8">
        
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

    <!-- JavaScript para el Carrusel -->
    <script>
        let currentIndex = 0;
    
        function moveSlide(direction) {
            const carousel = document.getElementById('carouselSlides');
            const slides = carousel.children;
            const totalSlides = slides.length;
    
            // Ajustar el índice si es menor o mayor que la cantidad de slides
            currentIndex += direction;
            if (currentIndex < 0) {
                currentIndex = totalSlides - 1;
            } else if (currentIndex >= totalSlides) {
                currentIndex = 0;
            }
    
            // Mover el carrusel usando translateX
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
    
        // Cambio automático de diapositiva cada 4 segundos
        setInterval(() => {
            moveSlide(1);
        }, 4000);
    </script>

    <!-- JavaScript para manejar el scroll y fijar el nav en la parte superior -->
    <script>
        const topBar = document.getElementById("top-bar");
        const navContainer = document.getElementById("nav-container");
        let lastScrollTop = 0;

        window.addEventListener("scroll", () => {
            let scrollTop = window.scrollY || document.documentElement.scrollTop;

            if (scrollTop > 0) {
                topBar.style.transform = "translateY(-100%)"; // Oculta el top-bar al hacer scroll
                navContainer.style.top = "0"; // Fija el nav-container en la parte superior
            } else {
                topBar.style.transform = "translateY(0)"; // Muestra el top-bar
                navContainer.style.top = "36px"; // Coloca el nav-container debajo del top-bar
            }

            lastScrollTop = scrollTop;
        });
    </script>
<footer class="bg-black text-white py-8">
    <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-start md:space-x-16">
        
        <!-- Social Media Icons Section -->
        <div class="flex space-x-6 mb-8 md:mb-0">
            <a href="#" aria-label="Twitter" class="text-gray-400 hover:text-white transition">
                <img src="{{ asset('imagenes/twitter.png') }}" alt="Twitter" class="h-6 w-6">
            </a>
            <a href="#" aria-label="Instagram" class="text-gray-400 hover:text-white transition">
                <img src="{{ asset('imagenes/instagram.png') }}" alt="Instagram" class="h-6 w-6">
            </a>
            <a href="#" aria-label="YouTube" class="text-gray-400 hover:text-white transition">
                <img src="{{ asset('imagenes/youtube.png') }}" alt="YouTube" class="h-6 w-6">
            </a>
            <a href="#" aria-label="LinkedIn" class="text-gray-400 hover:text-white transition">
                <img src="{{ asset('imagenes/linkedin.png') }}" alt="LinkedIn" class="h-6 w-6">
            </a>
        </div>

        <!-- Column Links - Horizontal Alignment -->
        <div class="flex space-x-12 text-gray-400 text-sm md:justify-between">
            <!-- Column 1: Use Cases -->
            <div class="space-y-2">
                <h3 class="font-semibold text-white mb-3">Use Cases</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="hover:text-white transition">UI Design</a></li>
                    <li><a href="#" class="hover:text-white transition">UX Design</a></li>
                    <li><a href="#" class="hover:text-white transition">Wireframing</a></li>
                </ul>
            </div>

            <!-- Column 2: Explore -->
            <div class="space-y-2">
                <h3 class="font-semibold text-white mb-3">Explore</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="hover:text-white transition">Design</a></li>
                    <li><a href="#" class="hover:text-white transition">Prototyping</a></li>
                    <li><a href="#" class="hover:text-white transition">Development Features</a></li>
                    <li><a href="#" class="hover:text-white transition">Design Systems</a></li>
                </ul>
            </div>

            <!-- Column 3: Resources -->
            <div class="space-y-2">
                <h3 class="font-semibold text-white mb-3">Resources</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="hover:text-white transition">Blog</a></li>
                    <li><a href="#" class="hover:text-white transition">Colors</a></li>
                    <li><a href="#" class="hover:text-white transition">Support</a></li>
                    <li><a href="#" class="hover:text-white transition">Developers</a></li>
                </ul>
            </div>
        </div>

        <!-- Logo Section (Aligned Right) -->
        <div class="flex-shrink-0 mt-8 md:mt-0 md:ml-12">
            <img src="{{ asset('img/LogoNav.png') }}" alt="Neuma Racing Logo" class="h-12 w-auto">
        </div>
    </div>
</footer>


</body>
</html>
