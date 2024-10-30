<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neuma Racing</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Top nav-bar -->
    <div id="top-bar" class="bg-gray-100 text-black flex justify-end items-center px-6 py-2">
        <!-- Email y WhatsApp -->
        <div class="flex items-center space-x-14">
            <!-- Email -->
            <div class="flex items-center space-x-2">
                <a href="/" class="flex items-center space-x-2">
                    <img src="{{asset("img/email.svg")}}" alt="Email" class="h-6 w-6">
                    <span class="font-bold">jcnllantas@gmail.com</span>
                </a>
            </div>
            <!-- WhatsApp -->
            <div class="flex items-center space-x-0">
                <a href="/" class="flex items-center space-x-0">
                    <img src="{{asset("img/whatsapp.png")}}" alt="Whatsapp" class="h-8 w-8">
                    <span class="font-bold">+51 948 464 266</span>
                </a>
            </div>
        </div>
    </div>
    <!--Nav-->
    <nav class="bg-black text-white flex items-center justify-between px-6 py-4">
        <!-- Sección Izquierda: Logo -->
        <div class="flex items-center space-x-4">
            <a href="/">
                <img src="{{ asset('img/LogoNav.png') }}" alt="Neuma Racing" class="h-12">
            </a>
        </div> 
        <!-- Sección Central: Barra de Búsqueda -->
        <div class="flex justify-center flex-1">
            <div class="relative w-96">
                <!-- Imagen de Lupa con un Label -->
                <label for="search-input" class="absolute left-3 top-1/2 transform -translate-y-1/2 cursor-text">
                    <img src="{{ asset('img/lupa.png') }}" alt="Buscar" class="h-5 w-5" />
                </label>
                <!-- Campo de Entrada -->
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

        <!-- Sección Derecha: Íconos de Usuario y Carrito -->
        <div class="flex items-center space-x-6">
            <!-- Ingresar -->
            <a href="#" class="flex items-center space-x-1 hover:text-gray-400">
                <img src="{{asset("img/person.png")}}" alt="Persona">
                <span>Ingresar</span>
            </a>
            <!-- Carrito -->
            <a href="#" class="flex items-center space-x-2   hover:text-gray-400">
                <img src="{{asset("img/carrito.png")}}" alt="Carrito">
                <span>Carrito</span>
            </a>
        </div>
    </nav>
    

</body>
</html>
