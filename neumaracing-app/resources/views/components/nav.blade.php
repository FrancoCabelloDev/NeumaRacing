<!-- Top nav-bar -->
<div id="top-bar" class="bg-amber-300 text-black flex justify-end items-center px-6 py-1 fixed top-0 left-0 w-full z-50 transition-transform duration-100">
    <div class="flex items-center space-x-14">
        <div class="flex items-center space-x-2">
            <a href="#" class="flex items-center space-x-2">
                <img src="{{ asset('img/icons/email.svg') }}" alt="Email" class="h-6 w-6">
                <span class="font-bold">jcnllantas@gmail.com</span>
            </a>
        </div>
        <div class="flex items-center space-x-0">
            <a href="https://wa.me/+51948464266" class="flex items-center space-x-1">
                <img src="{{ asset('img/icons/whatsapp.png') }}" alt="Whatsapp" class="h-7 w-7">
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
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/logos/LogoNav.png') }}" alt="Neuma Racing" class="h-12">
            </a>
        </div>
        <div class="flex justify-center flex-1">
            <div class="relative w-96">
                <label for="search-input" class="absolute left-3 top-1/2 transform -translate-y-1/2 cursor-text">
                    <img src="{{ asset('img/icons/lupa.png') }}" alt="Buscar" class="h-5 w-5" />
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
                <img src="{{ asset('img/icons/person.png') }}" alt="Persona">
                <span>Ingresar</span>
            </a>
            <a href="#" class="flex items-center space-x-2 hover:text-gray-400">
                <img src="{{ asset('img/icons/carrito.png') }}" alt="Carrito">
                <span>Carrito</span>
            </a>
        </div>
    </nav>

    <!-- Sección de Filtros, pegada al Nav Principal -->
    <section id="filters-section" class="bg-white border-t border-b border-gray-400">
        <div class="grid grid-cols-4 gap-0">
            <a href="{{ route('automovil.index') }}" class="flex flex-col items-center justify-center relative group transition-all duration-300 h-24 bg-white hover:bg-gray-100">
                <img src="{{ asset('img/icons/automovil.png') }}" alt="Automóvil" class="h-12 w-12">
                <span class="mt-2 text-black font-semibold">AUTOMÓVIL</span>
                <span class="absolute bottom-0 left-0 w-full h-1 bg-red-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
            </a>
            <a href="{{ route('suvcrossover.index') }}" class="flex flex-col items-center justify-center relative group transition-all duration-300 h-24 bg-white hover:bg-gray-100">
                <img src="{{ asset('img/icons/suv.png') }}" alt="Automóvil" class="h-12 w-12">
                <span class="mt-2 text-black font-semibold">SUV / CROSSOVER</span>
                <span class="absolute bottom-0 left-0 w-full h-1 bg-red-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
            </a>
            <a href="{{ route('camionetas.index') }}" class="flex flex-col items-center justify-center relative group transition-all duration-300 h-24 bg-white hover:bg-gray-100">
                <img src="{{ asset('img/icons/camioneta.png') }}" alt="Automóvil" class="h-12 w-12">
                <span class="mt-2 text-black font-semibold">CAMIONETAS</span>
                <span class="absolute bottom-0 left-0 w-full h-1 bg-red-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
            </a>
            <a href="{{ route('vans.index') }}" class="flex flex-col items-center justify-center relative group transition-all duration-300 h-24 bg-white hover:bg-gray-100">
                <img src="{{ asset('img/icons/vans.png') }}" alt="Automóvil" class="h-12 w-12">
                <span class="mt-2 text-black font-semibold">VANS / COMERCIALES LIGEROS</span>
                <span class="absolute bottom-0 left-0 w-full h-1 bg-red-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
            </a>
        </div>
    </section>
    @vite('resources/js/scroll.js')
</div>