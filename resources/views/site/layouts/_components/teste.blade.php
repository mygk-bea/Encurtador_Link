@isset($nav)
    <ul class="header__nav d-flex m-0 justify-content-between">
        @foreach ($nav as $indice => $item)
            <li class="{{ $item['page'] }} px-4">
                <a href="{{ route('site.'.$item['page']) }}">{{ $item['traducao'] }}</a>
            </li>
        @endforeach
@endisset

