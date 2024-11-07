<header class="sticky top-0 z-50 bg-white shadow-lg flex justify-center items-center py-3 px-10 w-full">
    <div class="flex justify-between items-center w-full max-w-7xl px-4">
        <a href="{{ url('/') }}" class="flex-shrink-0">
            <img class="h-12 w-auto" src="{{ asset('/logos/logoGreenNoBg.png') }}" alt="Logo" />
        </a>
        @include('partials.nav')
    </div>
</header>
