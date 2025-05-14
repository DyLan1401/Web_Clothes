@extends('defaultlayout');
@session('content');
<!-- CHI TIẾT SẢN PHẨM -->
<div class="container mt-5">
  <div class="row">
    <!-- Hình ảnh -->
    <div class="col-md-6">
      <div class="product-image">Ảnh</div>
      <p class="mt-2">Chi tiết sản phẩm</p>
    </div>

    <!-- Thông tin sản phẩm -->
    <div class="col-md-6">
      <h4>Tên sản phẩm</h4>
      <p>Giới thiệu sản phẩm ngắn gọn</p>
      <h5 class="text-danger">Giá: 2.000.000₫</h5>

      <div class="my-3">
        <label><strong>Màu Sắc:</strong></label><br>
        <div class="color-box"></div>
        <div class="color-box"></div>
        <div class="color-box"></div>
      </div>

      <div class="mb-3">
        <label><strong>Kích thước:</strong></label><br>
        <div class="size-box"></div>
        <div class="size-box"></div>
        <div class="size-box"></div>
      </div>

      <div class="mb-3">
        <label><strong>Số lượng:</strong></label>
        <input type="number" class="form-control w-50" placeholder="1">
      </div>

      <div class="mb-4">
        <label><strong>Địa chỉ:</strong></label>
        <input type="text" class="form-control" placeholder="Nhập địa chỉ nhận hàng">
      </div>

      <div class="d-flex gap-3">
        <button class="btn btn-outline-dark">Thêm vào giỏ hàng</button>
        <button class="btn btn-dark">Mua ngay</button>
      </div>
    </div>
  </div>

  <!-- Mô tả thêm -->
  <div class="mt-5">
    <h5>Chi tiết sản phẩm</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</div>

@endsession