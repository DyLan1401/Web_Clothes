<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4">Sửa sản phẩm</h1>

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('sanpham.update', $sanpham->id_san_pham) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Tên sản phẩm -->
                    <div class="mb-3">
                        <label for="Ten_SP" class="form-label">Tên sản phẩm</label>
                        <input type="text" name="Ten_SP" class="form-control" value="{{ $sanpham->Ten_SP }}" required>
                    </div>

                    <!-- Mô tả -->
                    <div class="mb-3">
                        <label for="MoTa_SP" class="form-label">Mô tả</label>
                        <textarea name="MoTa_SP" class="form-control" rows="3">{{ $sanpham->MoTa_SP }}</textarea>
                    </div>

                    <!-- Giá -->
                    <div class="mb-3">
                        <label for="Gia" class="form-label">Giá</label>
                        <input type="number" name="Gia" class="form-control" step="0.01" value="{{ $sanpham->Gia }}" required>
                    </div>

                    <!-- Số lượng -->
                    <div class="mb-3">
                        <label for="SoLuong" class="form-label">Số lượng</label>
                        <input type="number" name="SoLuong" class="form-control" value="{{ $sanpham->SoLuong }}" required>
                    </div>

                    <!-- Loại sản phẩm -->
                    <div class="mb-3">
                        <label for="Loai_SP" class="form-label">Loại sản phẩm</label>
                        <input type="text" name="Loai_SP" class="form-control" value="{{ $sanpham->Loai_SP }}" required>
                    </div>

                    <!-- Hình ảnh -->
                    <div class="mb-3">
                        <label for="Hinh_SP" class="form-label">Hình ảnh</label>
                        <input type="file" name="Hinh_SP" class="form-control">
                        @if($sanpham->Hinh_SP)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $sanpham->Hinh_SP) }}" alt="Hình sản phẩm" style="max-width: 150px;">
                            </div>
                        @endif
                    </div>

                    <!-- Button Submit -->
                    <button type="submit" class="btn btn-success w-100">Cập nhật sản phẩm</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
