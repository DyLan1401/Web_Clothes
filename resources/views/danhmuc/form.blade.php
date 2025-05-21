<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Mục</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4">
            {{ isset($danhmuc) ? 'Sửa Danh Mục' : 'Thêm Danh Mục' }}
        </h2>

        <form action="{{ isset($danhmuc) ? route('danhmuc.update', $danhmuc->id_DM) : route('danhmuc.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm">
            @csrf
            @if(isset($danhmuc))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label class="form-label">Mã danh mục</label>
                <input type="text" name="id_DM" class="form-control"
                       value="{{ old('id_DM', optional($danhmuc)->id_DM) }}"
                       {{ isset($danhmuc) ? 'readonly' : '' }}>
            </div>

            <div class="mb-3">
                <label class="form-label">Tên danh mục</label>
                <input type="text" name="ten_DM" class="form-control"
                       value="{{ old('ten_DM', optional($danhmuc)->ten_DM) }}" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                {{ isset($danhmuc) ? 'Cập nhật' : 'Thêm mới' }}
            </button>
        </form>
    </div>

    <!-- Bootstrap JS (nếu cần tính năng như modal, dropdown...) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>