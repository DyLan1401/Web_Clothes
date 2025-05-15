@extends('layout.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Chỉnh sửa sản phẩm</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('sanpham.update', $sanpham->id_san_pham) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        @include('sanpham.form', ['sanpham' => $sanpham])

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('sanpham.index') }}" class="btn btn-secondary">← Quay lại</a>
                            <button type="submit" class="btn btn-success">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
