{{-- Hiển thị lỗi nếu có --}}
@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-3">
    <label for="id_DM" class="form-label">Mã danh mục</label>
    <input type="text" name="id_DM" id="id_DM" class="form-control"
           value="{{ old('id_DM', optional($danhmuc)->id_DM) }}"
           {{ isset($danhmuc) ? 'readonly' : '' }}>
</div>

<div class="mb-3">
    <label for="ten_DM" class="form-label">Tên danh mục</label>
    <input type="text" name="ten_DM" id="ten_DM" class="form-control"
           value="{{ old('ten_DM', optional($danhmuc)->ten_DM) }}" required>
</div>
