<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>

    <a href="{{ route('sanpham.create') }}">Thêm mới sản phẩm</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sanphams as $sanpham)
                <tr>
                    <td>{{ $sanpham->id_san_pham }}</td>
                    <td>{{ $sanpham->Ten_SP }}</td>
                    <td>{{ $sanpham->MoTa_SP }}</td>
                    <td>{{ $sanpham->Gia }}</td>
                    <td>{{ $sanpham->SoLuong }}</td>
                    <td>
                        <a href="{{ route('sanpham.edit', $sanpham->id_san_pham) }}">Sửa</a>
                        <form action="{{ route('sanpham.destroy', $sanpham->id_san_pham) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
