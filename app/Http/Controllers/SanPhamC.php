<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SanPhamC extends Controller
{
    public function index() {
        $sanphams = SanPham::all();
        return view('sanpham.index', compact('sanphams'));
        
    }
    

    public function create()
{
    return view('sanpham.create', ['sanpham' => new Sanpham()]);
}


   
    public function edit($id)
{
    // Lấy sản phẩm theo id_san_pham
    $sanpham = SanPham::where('id_san_pham', $id)->firstOrFail();
    
    // Truyền biến $sanpham vào view
    return view('sanpham.edit', compact('sanpham'));
}


    // public function edit($id)
    // {
    //     $sanpham = SanPham::where('id_san_pham', $id)->firstOrFail();
    //     return view('sanpham.edit', compact('sanpham'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $sanpham = SanPham::where('id_san_pham', $id)->firstOrFail();

    //     $request->validate([
    //         'Ten_SP' => 'required|string|max:255',
    //         'MoTa_SP' => 'nullable|string|max:255',
    //         'Gia' => 'required|numeric',
    //         'SoLuong' => 'required|numeric',
    //         'MauSac' => 'nullable|string|max:255',
    //         'KichThuoc' => 'nullable|string|max:255',
    //         'Loai_SP' => 'required|string|max:255',
    //         'Hinh_SP' => 'nullable|image|max:2048',
    //     ]);

    //     $data = $request->except('Hinh_SP');

    //     if ($request->hasFile('Hinh_SP')) {
    //         // Xoá ảnh cũ nếu có
    //         if ($sanpham->Hinh_SP) {
    //             Storage::disk('public')->delete($sanpham->Hinh_SP);
    //         }
    //         $data['Hinh_SP'] = $request->file('Hinh_SP')->store('hinhsanpham', 'public');
    //     }

    //     $sanpham->update($data);

    //     return redirect()->route('sanpham.index')->with('success', 'Cập nhật sản phẩm thành công!');
    // }

    public function destroy($id)
    {
        $sanpham = SanPham::where('id_san_pham', $id)->firstOrFail();

        if ($sanpham->Hinh_SP) {
            Storage::disk('public')->delete($sanpham->Hinh_SP);
        }

        $sanpham->delete();

        return redirect()->route('sanpham.index')->with('success', 'Xóa sản phẩm thành công!');
    }
}
