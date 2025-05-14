<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SanPhamController extends Controller
{
    public function index()
    {
        $sanphams = SanPham::all();
        return view('sanpham.index', compact('sanphams'));
    }

    public function create()
    {
        return view('sanpham.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_san_pham' => 'required|unique:san_phams,id_san_pham',
            'Ten_SP' => 'required|string|max:255',
            'Gia' => 'required|numeric',
            'SoLuong' => 'required|numeric',
            'Loai_SP' => 'required|string|max:255',
            'Hinh_SP' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('Hinh_SP')) {
            $data['Hinh_SP'] = $request->file('Hinh_SP')->store('hinhsanpham', 'public');
        }

        SanPham::create($data);

        return redirect()->route('sanpham.index')->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    public function edit($id)
    {
        $sanpham = SanPham::findOrFail($id);
        return view('sanpham.edit', compact('sanpham'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Ten_SP' => 'required|string|max:255',
            'Gia' => 'required|numeric',
            'SoLuong' => 'required|numeric',
            'Loai_SP' => 'required|string|max:255',
            'Hinh_SP' => 'nullable|image|max:2048',
        ]);

        $sanpham = SanPham::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('Hinh_SP')) {
            if ($sanpham->Hinh_SP) {
                Storage::disk('public')->delete($sanpham->Hinh_SP);
            }
            $data['Hinh_SP'] = $request->file('Hinh_SP')->store('hinhsanpham', 'public');
        }

        $sanpham->update($data);

        return redirect()->route('sanpham.index')->with('success', 'Sản phẩm đã được cập nhật thành công!');
    }

    public function destroy($id)
    {
        $sanpham = SanPham::findOrFail($id);

        if ($sanpham->Hinh_SP) {
            Storage::disk('public')->delete($sanpham->Hinh_SP);
        }

        $sanpham->delete();

        return redirect()->route('sanpham.index')->with('success', 'Sản phẩm đã được xóa thành công!');
    }
}
