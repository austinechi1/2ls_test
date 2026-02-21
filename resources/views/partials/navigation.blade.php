<nav class="fixed top-0 w-full bg-white/80 backdrop-blur-sm z-50 border-b border-gray-100">
    <div class="w-full px-8 py-5">
        <div class="flex justify-between items-center">
           

            <!-- Logo - Text version with named route -->
            <a href="{{ route('home') }}" class="text-lg font-light tracking-[0.3em] uppercase">2Ls Photography</a>

            <!-- Logo - Image version (future) -->
            <!-- 
            <a href="{{ route('home') }}" class="block">
                <img src="{{ asset('images/logo.png') }}" alt="2Ls Photography" class="h-8 w-auto">
            </a>
            -->
            
            <!-- Hamburger Menu Button -->
            <button id="menuBtn" class="group flex flex-col items-end space-y-1.5 focus:outline-none">
                <span class="block w-7 h-0.5 bg-gray-800 group-hover:bg-gray-500 transition"></span>
                <span class="block w-5 h-0.5 bg-gray-800 group-hover:bg-gray-500 transition"></span>
                <span class="block w-7 h-0.5 bg-gray-800 group-hover:bg-gray-500 transition"></span>
            </button>
        </div>
    </div>

    <!-- Slide-out Menu from the right -->
    <div id="menuOverlay" class="fixed inset-0 bg-black/20 backdrop-blur-sm z-40 hidden">
        <div class="absolute top-0 right-0 w-80 h-full bg-white shadow-xl transform transition-transform duration-300 translate-x-0">
            <!-- Close button at top right of menu -->
            <div class="flex justify-end p-6">
                <button id="closeBtn" class="text-3xl text-gray-500 hover:text-gray-800 transition">&times;</button>
            </div>
            
         <!-- Menu items - aligned to the right with proper padding -->
<!-- Menu items - smaller text with proper padding -->
<div class="flex flex-col space-y-4 text-right pr-8 md:pr-16">
    <a href="/" class="text-xl md:text-2xl font-light text-gray-800 hover:text-gray-400 transition tracking-wide">Home</a>
    <a href="/about" class="text-xl md:text-2xl font-light text-gray-800 hover:text-gray-400 transition tracking-wide">About</a>  <!-- ✅ Now goes to about page -->
    <a href="/portfolio" class="text-xl md:text-2xl font-light text-gray-800 hover:text-gray-400 transition tracking-wide">Portfolio</a>  <!-- ✅ Added portfolio link -->
    
    <a href="/services" class="text-xl md:text-2xl font-light text-gray-800 hover:text-gray-400 transition tracking-wide">Services</a>  <!-- ✅ Added services link -->
    <a href="#" class="text-xl md:text-2xl font-light text-gray-800 hover:text-gray-400 transition tracking-wide">Info</a>
    <a href="/contact" class="text-xl md:text-2xl font-light text-gray-800 hover:text-gray-400 transition tracking-wide">Contact</a>  <!-- ✅ Added contact link -->
</div>
        </div>
    </div>
</nav>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const closeBtn = document.getElementById('closeBtn');
    const menuOverlay = document.getElementById('menuOverlay');
    const menuPanel = document.querySelector('#menuOverlay > div');

    function openMenu() {
        menuOverlay.classList.remove('hidden');
        // Small delay for animation
        setTimeout(() => {
            menuPanel.style.transform = 'translateX(0)';
        }, 10);
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        menuPanel.style.transform = 'translateX(100%)';
        setTimeout(() => {
            menuOverlay.classList.add('hidden');
        }, 300);
        document.body.style.overflow = '';
    }

    menuBtn.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);

    // Close when clicking outside the menu panel
    menuOverlay.addEventListener('click', (e) => {
        if (e.target === menuOverlay) {
            closeMenu();
        }
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('#menuOverlay a').forEach(link => {
        link.addEventListener('click', (e) => {
            closeMenu();
            
            const href = link.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    setTimeout(() => {
                        target.scrollIntoView({ behavior: 'smooth' });
                    }, 300);
                }
            }
        });
    });
</script>