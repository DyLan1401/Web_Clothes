<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Danh sách sản phẩm</h1>
            <a href="{{ route('sanpham.create') }}" class="btn btn-success">Thêm mới sản phẩm</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
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
                            <td>{{ number_format($sanpham->Gia, 0, ',', '.') }} đ</td>
                            <td>{{ $sanpham->SoLuong }}</td>
                            <td class="text-nowrap">
                                <a href="{{ route('sanpham.edit', $sanpham->id_san_pham) }}" class="btn btn-sm btn-warning">Sửa</a>

                                <form action="{{ route('sanpham.destroy', $sanpham->id_san_pham) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
