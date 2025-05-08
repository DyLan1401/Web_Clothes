<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách mã giảm giá</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Danh sách mã giảm giá</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('discounts.create') }}" class="btn btn-success mb-3">+ Thêm mã giảm giá</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã</th>
                <th>Phần trăm</th>
                <th>Loại</th>
                <th>Giá trị tối thiểu</th>
                <th>Số lần tối đa</th>
                <th>Đã dùng</th>
                <th>Hết hạn</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($discounts as $discount)
                <tr>
                    <td>{{ $discount->ma_giam_gia }}</td>
                    <td>{{ $discount->phan_tram_giam_gia }}%</td>
                    <td>{{ $discount->loai_giam_gia == 'percentage' ? 'Phần trăm' : 'Cố định' }}</td>
                    <td>{{ $discount->gia_tri_don_hang_toi_thieu ?? '-' }}</td>
                    <td>{{ $discount->so_lan_su_dung_toi_da ?? '-' }}</td>
                    <td>{{ $discount->so_lan_da_su_dung ?? 0 }}</td>
                    <td>{{ $discount->ngay_het_han_giam_gia->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('discounts.edit', $discount->ma_giam_gia) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('discounts.destroy', $discount->ma_giam_gia) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Không có mã giảm giá nào.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
