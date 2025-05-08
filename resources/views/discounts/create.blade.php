<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo mã giảm giá</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Tạo mã giảm giá</h1>

    <form action="{{ route('discounts.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="ma_giam_gia">Mã giảm giá</label>
            <input type="number" name="ma_giam_gia" class="form-control" value="{{ old('ma_giam_gia') }}" required>
            @error('ma_giam_gia') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="phan_tram_giam_gia">Phần trăm giảm giá</label>
            <input type="number" step="0.01" name="phan_tram_giam_gia" class="form-control" value="{{ old('phan_tram_giam_gia') }}" required>
            @error('phan_tram_giam_gia') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="loai_giam_gia">Loại giảm giá</label>
            <select name="loai_giam_gia" class="form-control" required>
                <option value="percentage" {{ old('loai_giam_gia') == 'percentage' ? 'selected' : '' }}>Phần trăm</option>
                <option value="fixed" {{ old('loai_giam_gia') == 'fixed' ? 'selected' : '' }}>Cố định</option>
            </select>
            @error('loai_giam_gia') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="gia_tri_don_hang_toi_thieu">Giá trị đơn hàng tối thiểu</label>
            <input type="number" step="0.01" name="gia_tri_don_hang_toi_thieu" class="form-control" value="{{ old('gia_tri_don_hang_toi_thieu') }}">
            @error('gia_tri_don_hang_toi_thieu') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="so_lan_su_dung_toi_da">Số lần sử dụng tối đa</label>
            <input type="number" name="so_lan_su_dung_toi_da" class="form-control" value="{{ old('so_lan_su_dung_toi_da') }}">
            @error('so_lan_su_dung_toi_da') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group mb-4">
            <label for="ngay_het_han_giam_gia">Ngày hết hạn</label>
            <input type="datetime-local" name="ngay_het_han_giam_gia" class="form-control" value="{{ old('ngay_het_han_giam_gia') }}" required>
            @error('ngay_het_han_giam_gia') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Tạo</button>
        <a href="{{ route('discounts.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
</body>
</html>
