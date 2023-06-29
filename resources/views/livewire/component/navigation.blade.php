<div>
    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <a href="{{ url('/') }}" class="logo m-0 float-start">{{ config('app.name', 'Cube Route Assessment') }}</a>

                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                        @guest
                            @if (Route::has('login'))
                                <li><a href="{{ route('login') }}">Login</a></li>
                            @endif
                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @endif
                        @else
                            <li><a href="{{ url('home') }}">Home</a></li>
                            <li><a href="{{ url('products') }}">Products</a></li>
                            <li><a href="{{ url('categories') }}">Categories</a></li>
                            <li class="has-children active">
                                <a href="javascript:void(0)">{{ Auth::user()->name }}</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </li>
                        @endguest
                    </ul>

                    <a href="javascript:void(0)" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>
