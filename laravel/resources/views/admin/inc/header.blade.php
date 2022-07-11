<header>
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="https://developer.mozilla.org/">Hello</use>
        </svg>
    </a>
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{route('admin_home')}}" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="{{route('goods.index')}}" class="nav-link px-2 link-secondary">Goods</a></li>
{{--      --}}
{{--        <li><a href="{{route('about')}}" class="nav-link px-2 link-dark">Про нас</a></li>--}}
{{--        @guest()--}}
{{--            <li><a href="{{route('feedback')}}" class="nav-link px-2 link-dark">Залишити повідомлення</a></li>--}}
{{--        @endguest--}}
{{--        @auth()--}}
{{--            <li><a href="{{route('feedback')}}" class="nav-link px-2 link-dark">Чат</a></li>--}}
{{--            --}}{{--            Зробити роут чат--}}
{{--        @endauth--}}




            <a href="{{route('admin_logout')}}">
                <button type="button" class="btn btn-outline-primary me-2">Вихід</button>
            </a>

{{--        @guest()--}}
{{--            <div class="col-md-3 text-end" id="header_button_login_and_register">--}}
{{--                <a href="{{route('login')}}">--}}
{{--                    <button type="button" class="btn btn-outline-primary me-2">Вхід</button>--}}
{{--                </a>--}}
{{--                <a href="{{route('register')}}">--}}
{{--                    <button type="button" class="btn btn-primary">Реєстрація</button>--}}
{{--                </a>--}}
{{--            </div>--}}
    </ul>
{{--    @endguest--}}
</header>
