<footer class="bg-black text-white py-8">
    <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-start md:space-x-16">
        
        <!-- Social Media Icons Section -->
        <div class="flex space-x-6 mb-8 md:mb-0">
            <a href="https://www.facebook.com/profile.php?id=100063633069250" aria-label="Facebook" class="text-gray-400 hover:text-white transition">
                <img src="{{ asset('img/icons/facebook.png') }}" alt="Facebook" class="h-6 w-6">
            </a>
            <a href="#" aria-label="Instagram" class="text-gray-400 hover:text-white transition">
                <img src="{{ asset('img/icons/instagram.png') }}" alt="Instagram" class="h-6 w-6">
            </a>
            <a href="#" aria-label="YouTube" class="text-gray-400 hover:text-white transition">
                <img src="{{ asset('img/icons/youtube.png') }}" alt="YouTube" class="h-6 w-6">
            </a>
            <a href="#" aria-label="LinkedIn" class="text-gray-400 hover:text-white transition">
                <img src="{{ asset('img/icons/linkedin.png') }}" alt="LinkedIn" class="h-6 w-6">
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
            <img src="{{ asset('img/logos/LogoNav.png') }}" alt="Neuma Racing Logo" class="h-12 w-auto">
        </div>
    </div>
</footer>