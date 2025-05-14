<?php

namespace App\Http\Controllers;

use App\Models\DanhMucSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DanhMucSanPhamController extends Controller
{
    public function index()
    {
        $danhmucs = DanhMucSanPham::all();
        return view('danhmuc.index', compact('danhmucs'));
    }

    public function create()
    {
        return view('danhmuc.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_DM' => 'required|unique:danh_muc,id_DM',
            'ten_DM' => 'required|string|max:255',
           
        ]);

        $data = $request->all();

       
        DanhMucSanPham::create($data);

        return redirect()->route('danhmuc.index')->with('success', 'Danh mục đã được thêm thành công!');
    }

    public function edit($id)
    {
        $danhmuc = DanhMucSanPham::findOrFail($id);
        return view('danhmuc.edit', compact('danhmuc'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ten_DM' => 'required|string|max:255',
           
        ]);

        $danhmuc = DanhMucSanPham::findOrFail($id);

        $data = $request->all();
        $danhmuc->update($data);

        return redirect()->route('danhmuc.index')->with('success', 'Danh mục đã được cập nhật thành công!');
    }

    public function destroy($id)
    {
        $danhmuc = DanhMucSanPham::findOrFail($id);
         $danhmuc->delete();
        return redirect()->route('danhmuc.index')->with('success', 'Danh mục đã được xóa thành công!');
    }

}
