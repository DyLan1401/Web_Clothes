<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
</head>
<body>
    <h1>Sửa sản phẩm</h1>

    <form action="{{ route('sanpham.update', $sanpham->id_san_pham) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <label for="Ten_SP">Tên sản phẩm</label>
        <input type="text" name="Ten_SP" value="{{ $sanpham->Ten_SP }}" required><br>

        <label for="MoTa_SP">Mô tả</label>
        <input type="text" name="MoTa_SP" value="{{ $sanpham->MoTa_SP }}"><br>

        <label for="Gia">Giá</label>
        <input type="number" name="Gia" value="{{ $sanpham->Gia }}" step="0.01" required><br>

        <label for="SoLuong">Số lượng</label>
        <input type="number" name="SoLuong" value="{{ $sanpham->SoLuong }}" required><br>

        <label for="Loai_SP">Loại sản phẩm</label>
        <input type="text" name="Loai_SP" value="{{ $sanpham->Loai_SP }}" required><br>

        <label for="Hinh_SP">Hình ảnh</label>
        <input type="file" name="Hinh_SP"><br>

        <button type="submit">Cập nhật sản phẩm</button>
    </form>
</body>
</html>
