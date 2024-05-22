<header class="header w-100 d-flex justify-content-between align-items-center p-3">
    <div class="logo">
        <a href="{{ route('site.index') }}" class="d-flex align-items-center justify-content-center">
            <img src="{{ asset('images/Logo.png') }}" class="site__logo" alt="logo">
            <h1 class="site__title">Encurta Link</h1>
        </a>
    </div>
    <ul class="header__nav d-flex m-0 justify-content-between">
        @isset($nav)
        <ul class="header__nav d-flex m-0 justify-content-between">
            @foreach ($nav as $indice => $item)
                <li class="{{ $item['page'] }} px-4">
                    <a href="{{ route($item['route'].'.'.$item['page']) }}">{{ $item['name'] }}</a>
                </li>
            @endforeach
        @endisset
    </ul>
</header>