    <!-- Navbar -->
    <nav id="navbar" class="fixed w-full bg-black/50 backdrop-blur-md shadow-md shadow-gray-700 transition-transform duration-300 transform-gpu z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-amber-400  via-red-600 to-slate-800 bg-clip-text text-transparent">
                ZEIDA KAIZEN
            </a>

            <!-- Navigation Links -->
            <ul class="hidden md:flex space-x-6 text-gray-300 font-medium">
                <li><a href="/" class="hover:text-amber-500 transition-colors">Home</a></li>
                <li><a href="/about" class="hover:text-amber-500 transition-colors">About</a></li>
                <li><a href="/services" class="hover:text-amber-500 transition-colors">Services</a></li>
                <li><a href="/contact" class="hover:text-amber-500 transition-colors">Contact</a></li>
            </ul>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden flex items-center text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden bg-black md:hidden shadow-md">
            <ul class="space-y-4 p-4 text-gray-300 font-medium">
                <li><a href="/" class="block hover:text-amber-500 transition-colors">Home</a></li>
                <li><a href="/about" class="block hover:text-amber-500 transition-colors">About</a></li>
                <li><a href="/services" class="block hover:text-amber-500 transition-colors">Services</a></li>
                <li><a href="/contact" class="block hover:text-amber-500 transition-colors">Contact</a></li>
            </ul>
        </div>
    </nav>