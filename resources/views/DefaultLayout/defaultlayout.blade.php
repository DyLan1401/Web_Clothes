<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-image {
            width: 100%;
            height: 450px;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ccc;
        }

        .color-box,
        .size-box {
            width: 40px;
            height: 30px;
            background-color: #ddd;
            border: 1px solid #999;
            display: inline-block;
            margin-right: 10px;
        }

        .btn-outline {
            border: 1px solid black;
            background-color: white;
            padding: 6px 16px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
        <a class="navbar-brand" href="#">LOGO</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Text</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Text</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Text</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Text</a></li>
            </ul>
            <form class="d-flex me-3">
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm">
            </form>
            <div class="d-flex align-items-center">
                <a href="#" class="me-3"><i class="bi bi-cart"></i> 🛒</a>
                <a href="#"><i class="bi bi-person"></i> 👤 User</a>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>