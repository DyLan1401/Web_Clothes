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
                <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="id_san_pham" class="form-label">ID sản phẩm</label>
                        <input type="text" name="id_san_pham" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="Ten_SP" class="form-label">Tên sản phẩm</label>
                        <input type="text" name="Ten_SP" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="MoTa_SP" class="form-label">Mô tả</label>
                        <textarea name="MoTa_SP" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="Gia" class="form-label">Giá</label>
                        <input type="number" name="Gia" class="form-control" step="0.01" required>
                    </div>

                    <div class="mb-3">
                        <label for="SoLuong" class="form-label">Số lượng</label>
                        <input type="number" name="SoLuong" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="Loai_SP" class="form-label">Loại sản phẩm</label>
                        <input type="text" name="Loai_SP" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="Hinh_SP" class="form-label">Hình ảnh</label>
                        <input type="file" name="Hinh_SP" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Lưu sản phẩm</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (tùy chọn) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
