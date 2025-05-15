<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách danh mục</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Danh sách danh mục</h1>

    <div class="mb-3">
        <a href="{{ route('danhmuc.create') }}" class="btn btn-success">Thêm mới danh mục</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên Danh Mục</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($danhmucs as $danhmuc)
                <tr>
                    <td>{{ $danhmuc->id_DM }}</td>
                    <td>{{ $danhmuc->ten_DM }}</td>
                    <td>
                        <a href="{{ route('danhmuc.edit', $danhmuc->id_DM) }}" class="btn btn-primary btn-sm">Sửa</a>
                        <form action="{{ route('danhmuc.destroy', $danhmuc->id_DM) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap 5 JS (nếu bạn cần cho các component JS như modal, toast...) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
