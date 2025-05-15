<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới sản phẩm</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4">Thêm mới sản phẩm</h1>

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('danhmuc.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- ID sản phẩm -->
                    <div class="mb-3">
                        <label for="id_DM" class="form-label">ID Danh Mục</label>
                        <input type="text" name="id_DM" class="form-control" required>
                    </div>

                    <!-- Tên sản phẩm -->
                    <div class="mb-3">
                        <label for="ten_DM" class="form-label">Tên Danh Mục</label>
                        <input type="text" name="ten_DM" class="form-control" required>
                    </div>

                    <!-- Button Submit -->
                    <button type="submit" class="btn btn-primary w-100">Lưu Danh Mục</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (tùy chọn) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
