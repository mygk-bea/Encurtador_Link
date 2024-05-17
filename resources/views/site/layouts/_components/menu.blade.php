<header class="header w-100 d-flex justify-content-between align-items-center p-3">
    @isset($logo)
    <div class="{{ $logo }} d-flex align-items-center justify-content-center">
        <img src="{{ asset('images/Logo.png') }}" class="site__logo" alt="logo">
        <h1 class="title__logo">Encurta Link</h1>
    </div>
    @endisset
    <ul class="header__nav d-flex m-0 justify-content-between">
        @isset($home)
            <li class="{{ $home }} px-3">
                <a href="{{ route('site.index') }}">Home</a>
            </li>
        @endisset
        @isset($contact)
            <li class="{{ $contact }} px-3">
                <a href="{{ route('site.contact') }}">Contato</a>
            </li>
        @endisset
        @isset($register)
            <li class="{{ $register }} px-3">
                <a href="{{ route('site.register') }}">Cadastro</a>
            </li>
        @endisset
        @isset($login)
            <li class="{{ $login }} px-3">
                <a href="{{ route('site.login') }}">Login</a>
            </li>
        @endisset
        @isset($logout)
            <li class="{{ $logout }} px-3">
                <a href="{{ route('site.logout') }}">Logout</a>
            </li>
        @endisset
        @isset($generate)
            <li class="{{ $generate }} px-3">
                <a href="{{ route('app.generate') }}">Gerar Link</a>
            </li>
        @endisset
        @isset($list)
            <li class="{{ $list }} px-3"><a href="{{ route('app.list') }}">Meus Links</a>
            </li>
        @endisset
    </ul>
</header>