<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật mã giảm giá</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Cập nhật mã giảm giá</h1>

    <form action="{{ route('discounts.update', $discount->ma_giam_gia) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="ma_giam_gia">Mã giảm giá (không thể thay đổi)</label>
            <input type="text" name="ma_giam_gia" class="form-control" value="{{ $discount->ma_giam_gia }}" disabled>
        </div>

        <div class="form-group mb-3">
            <label for="phan_tram_giam_gia">Phần trăm giảm giá</label>
            <input type="number" step="0.01" name="phan_tram_giam_gia" class="form-control" value="{{ old('phan_tram_giam_gia', $discount->phan_tram_giam_gia) }}" required>
            @error('phan_tram_giam_gia') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="loai_giam_gia">Loại giảm giá</label>
            <select name="loai_giam_gia" class="form-control" required>
                <option value="percentage" {{ old('loai_giam_gia', $discount->loai_giam_gia) == 'percentage' ? 'selected' : '' }}>Phần trăm</option>
                <option value="fixed" {{ old('loai_giam_gia', $discount->loai_giam_gia) == 'fixed' ? 'selected' : '' }}>Cố định</option>
            </select>
            @error('loai_giam_gia') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="gia_tri_don_hang_toi_thieu">Giá trị đơn hàng tối thiểu</label>
            <input type="number" step="0.01" name="gia_tri_don_hang_toi_thieu" class="form-control" value="{{ old('gia_tri_don_hang_toi_thieu', $discount->gia_tri_don_hang_toi_thieu) }}">
            @error('gia_tri_don_hang_toi_thieu') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="so_lan_su_dung_toi_da">Số lần sử dụng tối đa</label>
            <input type="number" name="so_lan_su_dung_toi_da" class="form-control" value="{{ old('so_lan_su_dung_toi_da', $discount->so_lan_su_dung_toi_da) }}">
            @error('so_lan_su_dung_toi_da') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group mb-4">
            <label for="ngay_het_han_giam_gia">Ngày hết hạn</label>
            <input type="datetime-local" name="ngay_het_han_giam_gia" class="form-control" value="{{ old('ngay_het_han_giam_gia', $discount->ngay_het_han_giam_gia->format('Y-m-d\TH:i')) }}" required>
            @error('ngay_het_han_giam_gia') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('discounts.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
</body>
</html>
