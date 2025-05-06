<div class="mb-3">
    <label>Mã sản phẩm</label>
    <input type="text" name="id_san_pham" class="form-control"
           value="{{ old('id_san_pham', optional($sanpham)->id_san_pham) }}"
           {{ isset($sanpham) ? 'readonly' : '' }}>
</div>

<div class="mb-3">
    <label>Tên sản phẩm</label>
    <input type="text" name="Ten_SP" class="form-control"
           value="{{ old('Ten_SP', optional($sanpham)->Ten_SP) }}">
</div>

<div class="mb-3">
    <label>Mô tả</label>
    <textarea name="MoTa_SP" class="form-control">{{ old('MoTa_SP', optional($sanpham)->MoTa_SP) }}</textarea>
</div>

<div class="mb-3">
    <label>Giá</label>
    <input type="number" name="Gia" class="form-control"
           value="{{ old('Gia', optional($sanpham)->Gia) }}">
</div>

<div class="mb-3">
    <label>Số lượng</label>
    <input type="number" name="SoLuong" class="form-control"
           value="{{ old('SoLuong', optional($sanpham)->SoLuong) }}">
</div>

<div class="mb-3">
    <label>Màu sắc</label>
    <input type="text" name="MauSac" class="form-control"
           value="{{ old('MauSac', optional($sanpham)->MauSac) }}">
</div>

<div class="mb-3">
    <label>Kích thước</label>
    <input type="text" name="KichThuoc" class="form-control"
           value="{{ old('KichThuoc', optional($sanpham)->KichThuoc) }}">
</div>

<div class="mb-3">
    <label>Loại</label>
    <input type="text" name="Loai_SP" class="form-control"
           value="{{ old('Loai_SP', optional($sanpham)->Loai_SP) }}">
</div>

<div class="mb-3">
    <label>Hình ảnh</label>
    <input type="file" name="Hinh_SP" class="form-control">
    @if(!empty($sanpham) && $sanpham->Hinh_SP)
        <img src="{{ asset('storage/' . $sanpham->Hinh_SP) }}" width="80" class="mt-2">
    @endif
</div>
