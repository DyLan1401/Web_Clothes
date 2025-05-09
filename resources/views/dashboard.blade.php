<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5 bg-info">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <!-- Phần giữa -->
            <ul class="navbar-nav mx-auto">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Sản Phẩm
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.createUser') }}">Thời Trang Nam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}">Thời Trang nữ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}">Khuyến Mãi</a>
                </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}">Liên Hệ</a>
                </li>
            </ul>
            <!-- Phần bên phải -->
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item me-2">
                    <form action="{{ route('signout') }}" class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tài khoản
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                    @guest

                    <li><a class="dropdown-item" href="{{ route('signout') }}">Đăng nhập</a></li>
                    <li><a class="dropdown-item" href="{{ route('user.createUser') }}">Đăng kí</a></li>

                    @else
                        <li><a class="dropdown-item" href="{{ route('signout') }}">Thoát</a></li>
                        @endguest

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

    @yield('content')
</body>

</html>