<nav class="flex items-center relative">
    <!-- Modal -->
    <div id="modal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <div class="bg-white p-5 rounded shadow-lg">
            <h2 id="modal-title" class="text-lg font-bold mb-4"></h2>
            <div id="modal-content"></div>
            <button onclick="closeModal()" class="mt-4 bg-red-500 text-white p-2 rounded">Close</button>
        </div>
        <div onclick="closeModal()" class="fixed inset-0 bg-black opacity-50"></div>
    </div>

    <!-- Mobile Menu Toggle Button -->
    <button type="button" class="hidden phone:inline" onclick="toggleMenu()">
        <i class="fas fa-bars text-[#4D4D4D] hover:text-gray-400 text-3xl"></i>
    </button>


    <!-- Overlay for Mobile Menu -->
    <div id="menu-overlay" class="hidden fixed inset-0 bg-black opacity-50 z-10" onclick="closeMenu()"></div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden phone:block w-[50vw] fixed top-0 right-[-100%] bg-white shadow-lg phone:h-screen phone:overflow-y-auto z-20 transition-transform duration-300 ease-in-out">
        <ul class="flex flex-col items-start gap-10 p-12">
            <div class="flex space-x-2">
                <button onclick="changeLanguage('fr')" class="px-2 py-1 border rounded hover:bg-gray-200">FR</button>
                <button onclick="changeLanguage('ar')" class="px-2 py-1 border rounded hover:bg-gray-200">عربية</button>
            </div>
            @foreach (['home', 'projects', 'gallery', 'contact', 'about'] as $pageKey)
                <li>
                    <a href="{{ url($pageKey === 'home' ? '/' : '/' . $pageKey) }}"
                       class="text-[#4D4D4D] decoration-[#4caf4f] decoration-4"
                       onclick="setActivePage('{{ $pageKey }}')">
                        {{ __('messages.' . $pageKey) }}
                    </a>
                </li>
            @endforeach
            <li>
                <button onclick="openModal('{{ __('messages.donate_modal_title') }}', 'Donate Content')" class="bg-[#4caf4f] text-white px-4 py-2 rounded">
                    {{ __('messages.donate') }}
                </button>
            </li>
        </ul>
    </div>

    <!-- Desktop Menu -->
    <ul class="flex items-center gap-10 phone:hidden">
        @foreach (['home', 'projects', 'gallery', 'contact', 'about'] as $pageKey)
            <li>
                <a href="{{ url($pageKey === 'home' ? '/' : '/' . $pageKey) }}"
                   class="text-[#4D4D4D] decoration-[#4caf4f] decoration-4"
                   onclick="setActivePage('{{ $pageKey }}')">
                    {{ __('messages.' . $pageKey) }}
                </a>
            </li>
        @endforeach
        <li>
            <button onclick="openModal('{{ __('messages.donate_modal_title') }}', 'Donate Content')" class="bg-[#4caf4f] text-white px-4 py-2 rounded">
                {{ __('messages.donate') }}
            </button>
        </li>
        <div class="flex space-x-2">
            <button onclick="changeLanguage('fr')" class="px-2 py-1 border rounded hover:bg-gray-200">FR</button>
            <button onclick="changeLanguage('ar')" class="px-2 py-1 border rounded hover:bg-gray-200">عربية</button>
        </div>
    </ul>
</nav>
