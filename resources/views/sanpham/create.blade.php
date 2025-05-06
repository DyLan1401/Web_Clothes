<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới sản phẩm</title>
</head>
<body>
    <h1>Thêm mới sản phẩm</h1>

    <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="id_san_pham">ID sản phẩm</label>
        <input type="text" name="id_san_pham" required><br>

        <label for="Ten_SP">Tên sản phẩm</label>
        <input type="text" name="Ten_SP" required><br>

        <label for="MoTa_SP">Mô tả</label>
        <input type="text" name="MoTa_SP"><br>

        <label for="Gia">Giá</label>
        <input type="number" name="Gia" step="0.01" required><br>

        <label for="SoLuong">Số lượng</label>
        <input type="number" name="SoLuong" required><br>

        <label for="Loai_SP">Loại sản phẩm</label>
        <input type="text" name="Loai_SP" required><br>

        <label for="Hinh_SP">Hình ảnh</label>
        <input type="file" name="Hinh_SP"><br>

        <button type="submit">Lưu sản phẩm</button>
    </form>
</body>
</html>
