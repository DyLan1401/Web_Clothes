
@extends('dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-4">Danh sách bài viết</h1>
<a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tạo bài viết mới</a>

<table class="w-full mt-4 border">
    <thead>
        <tr>
            <th class="border px-4 py-2">Tiêu đề</th>
            <th class="border px-4 py-2">Trạng thái</th>
            <th class="border px-4 py-2">Tác giả</th>
            <th class="border px-4 py-2">Ngày tạo</th>
            <th class="border px-4 py-2">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td class="border px-4 py-2">{{ $post->tieu_de }}</td>
            <td class="border px-4 py-2">{{ $post->trang_thai }}</td>
            <td class="border px-4 py-2">{{ $post->tacGia->name ?? 'Không rõ' }}</td>
            <td class="border px-4 py-2">{{ $post->ngay_tao }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('posts.show', $post) }}" class="text-green-500">Xem</a> |
                <a href="{{ route('posts.edit', $post) }}" class="text-blue-500">Sửa</a> |
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Xoá bài viết?')" class="text-red-500">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
