<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // ✅ Bắt buộc đăng nhập
    }

    public function index()
    {
        $posts = Post::with('tacGia')->latest('ngay_tao')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tieu_de' => 'required|max:225',
            'noi_dung' => 'required',
            'anh_dai_dien' => 'nullable|max:225',
            'trang_thai' => 'required|in:draft,published,archived',
        ]);

        $validated['ma_tac_gia'] = auth()->id(); // ✅ Thêm tác giả từ người đăng nhập

        Post::create($validated);

        return redirect()->route('posts.index')->with('success', 'Tạo bài viết thành công!');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'tieu_de' => 'required|max:225',
            'noi_dung' => 'required',
            'anh_dai_dien' => 'nullable|max:225',
            'trang_thai' => 'in:draft,published,archived',
        ]);

        $post->update($request->only(['tieu_de', 'noi_dung', 'anh_dai_dien', 'trang_thai']));

        return redirect()->route('posts.index')->with('success', 'Bài viết đã được cập nhật.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Bài viết đã bị xoá.');
    }
}
