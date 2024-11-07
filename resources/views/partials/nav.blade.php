<nav class="flex items-center relative">
    <!-- Mobile Menu Toggle Button -->
    <button type="button" class="hidden phone:inline" onclick="toggleMenu()">
        <i class="fas fa-bars text-gray-700 hover:text-gray-500 text-3xl"></i>
    </button>

    <!-- Overlay for Mobile Menu -->
    <div id="menu-overlay" class="hidden fixed inset-0 bg-black opacity-50 z-10" onclick="closeMenu()"></div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden phone:block w-[80vw] fixed top-0 right-[-100%] bg-white shadow-lg phone:h-screen phone:overflow-y-auto z-20 transition-transform duration-300 ease-in-out">
        <ul class="flex flex-col items-start gap-8 p-8">
            <div class="flex space-x-2 mb-6">
                <button onclick="changeLanguage('fr')" class="px-3 py-1 border rounded-lg transition duration-200 hover:bg-gray-100">FR</button>
                <button onclick="changeLanguage('ar')" class="px-3 py-1 border rounded-lg transition duration-200 hover:bg-gray-100">عربية</button>
            </div>
            @foreach (['home', 'projects', 'gallery', 'contact', 'about'] as $pageKey)
                <li>
                    <a href="{{ url('/' . app()->getLocale() . '/' . ($pageKey === 'home' ? '' : $pageKey)) }}"
                       class="text-gray-700 font-medium text-lg decoration-[#4caf4f] decoration-4 {{ Request::segment(2) === ($pageKey === 'home' ? null : $pageKey) ? 'underline underline-offset-4 text-green-600' : '' }}
                       hover:text-green-600 transition-colors duration-200 ease-in-out hover:underline hover:underline-offset-8">
                        {{ __('messages.' . $pageKey) }}
                    </a>
                </li>
            @endforeach
            <li>
                <button onclick="openModal('{{ __('messages.donate_modal_title') }}', 'Donate Content')" class="bg-[#4caf4f] text-white px-6 py-2 rounded-lg font-semibold transition duration-200 hover:bg-green-700">
                    {{ __('messages.donate') }}
                </button>
            </li>
        </ul>
    </div>

    <!-- Desktop Menu -->
    <ul class="phone:hidden flex items-center gap-8 ml-auto">
        @foreach (['home', 'projects', 'gallery', 'contact', 'about'] as $pageKey)
            <li>
                <a href="{{ url('/' . app()->getLocale() . '/' . ($pageKey === 'home' ? '' : $pageKey)) }}"
                   class="text-gray-700 font-medium decoration-[#4caf4f] decoration-4 {{ Request::segment(2) === ($pageKey === 'home' ? null : $pageKey) ? 'underline underline-offset-4 text-green-600' : '' }}
                   hover:text-green-600 transition-colors duration-200 ease-in-out hover:underline hover:underline-offset-8">
                    {{ __('messages.' . $pageKey) }}
                </a>
            </li>
        @endforeach
        <li>
            <button onclick="openModal('{{ __('messages.donate_modal_title') }}', 'Donate Content')" class="bg-[#4caf4f] text-white px-5 py-2 rounded-lg font-semibold transition duration-200 hover:bg-green-700">
                {{ __('messages.donate') }}
            </button>
        </li>
        <div class="flex space-x-2 ml-4">
            <button onclick="changeLanguage('fr')" class="px-3 py-1 border rounded-lg transition duration-200 hover:bg-gray-100">FR</button>
            <button onclick="changeLanguage('ar')" class="px-3 py-1 border rounded-lg transition duration-200 hover:bg-gray-100">عربية</button>
        </div>
    </ul>
</nav>
