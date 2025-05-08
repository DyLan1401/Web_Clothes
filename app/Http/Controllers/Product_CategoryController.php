<?php

namespace App\Http\Controllers;

use App\Models\Product_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class Product_CategoryController extends Controller
{
    public function index()
    {
        $danhmucs = Product_Category::all();
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

       
        Product_Category::create($data);

        return redirect()->route('danhmuc.index')->with('success', 'Danh mục đã được thêm thành công!');
    }

    public function edit($id)
    {
        $danhmuc = Product_Category::findOrFail($id);
        return view('danhmuc.edit', compact('danhmuc'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ten_DM' => 'required|string|max:255',
           
        ]);

        $danhmuc = Product_Category::findOrFail($id);

        $data = $request->all();
        $danhmuc->update($data);

        return redirect()->route('danhmuc.index')->with('success', 'Danh mục đã được cập nhật thành công!');
    }

    public function destroy($id)
    {
        $danhmuc = Product_Category::findOrFail($id);
         $danhmuc->delete();
        return redirect()->route('danhmuc.index')->with('success', 'Danh mục đã được xóa thành công!');
    }

}
