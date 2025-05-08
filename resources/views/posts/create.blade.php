@extends('dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tạo bài viết</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label class="block mb-2">Tiêu đề:</label>
    <input name="tieu_de" class="border w-full p-2 mb-4" required>

    <label class="block mb-2">Nội dung:</label>
    <textarea name="noi_dung" class="border w-full p-2 mb-4" required></textarea>

    <label class="block mb-2">Ảnh đại diện (URL):</label>
    <input name="anh_dai_dien" class="border w-full p-2 mb-4">

    <label class="block mb-2">Trạng thái:</label>
    <select name="trang_thai" class="border w-full p-2 mb-4">
        <option value="draft">Nháp</option>
        <option value="published">Công khai</option>
        <option value="archived">Lưu trữ</option>
    </select>

    <button class="bg-green-500 text-white px-4 py-2 rounded" type="submit">Lưu</button>
</form>
@endsection