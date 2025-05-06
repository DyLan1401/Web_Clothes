@extends('layout.app')

@section('content')
<div class="container">
    <h2>Chỉnh sửa sản phẩm</h2>
    <form action="{{ route('sanpham.update', $sanpham->id_san_pham) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('sanpham.form', ['sanpham' => $sanpham])
        <button type="submit" class="btn btn-success">Cập nhật</button>
        <a href="{{ route('sanpham.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
