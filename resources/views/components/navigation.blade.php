<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Kasir</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <x-nav-link :active="request()->routeIs('items.*')" href="/">{{ __('Home') }}</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :active="request()->routeIs('about')" href="/about">{{ __('About') }}</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :active="request()->routeIs('contact')" href="/contact">
                        {{ __('Contact') }}
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="{{ route('login') }}">
                        {{ __('Login') }}
                    </x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>
