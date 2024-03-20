<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" type="image/svg+xml" href="/assets/logo.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Sarabun:wght@400;700&display=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    @hasSection('title')
        <title>LearnHub - @yield('title')</title>
    @else
        <title>LearnHub</title>
    @endif
</head>

<body>
    <header class="flex justify-between items-center px-12 py-3 bg-[#fff7e9]">
        <a href="{{ route('home') }}">
            <div class="flex items-center gap-2 text-[26px] font-bold text-[#ff731d]">
                <img class="size-12" src="/assets/logo.svg" alt="LearnHub logo" />
                <span>LearnHub</span>
            </div>
        </a>
        <nav class="flex items-center gap-8 font-bold text-[#ff731d] text-base">
            @auth
                <a href="{{ route('logout') }}">
                    Logout
                </a>
            @else
                <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'font-[#ef5b0c]' : '' }}">
                    Login
                </a>
                <a href="{{ route('register') }}" class="{{ request()->is('register') ? 'font-[#ef5b0c]' : '' }}">
                    Register
                </a>
            @endauth
        </nav>
    </header>

    <main>
        @yield('content')

        <wc-toast></wc-toast>
    </main>

    @if (session('toast'))
        <wc-toast></wc-toast>
        <div id="toast" data-message="{{ session('toast') }}"></div>
        @vite('resources/js/toast.js')
    @endif
</body>

</html>
