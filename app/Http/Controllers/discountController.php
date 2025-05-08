<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = Discount::all();
        return view('discounts.index', compact('discounts'));
    }

    public function create()
    {
        return view('discounts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ma_giam_gia' => 'required|integer|unique:discounts',
            'phan_tram_giam_gia' => 'required|numeric',
            'loai_giam_gia' => 'required|in:percentage,fixed',
            'gia_tri_don_hang_toi_thieu' => 'nullable|numeric',
            'so_lan_su_dung_toi_da' => 'nullable|integer',
            'ngay_het_han_giam_gia' => 'required|date',
        ]);

        Discount::create($request->all());
        return redirect()->route('discounts.index')->with('success', 'Tạo mã giảm giá thành công!');
    }

    public function edit($ma_giam_gia)
    {
        $discount = Discount::findOrFail($ma_giam_gia);
        return view('discounts.update', compact('discount'));
    }

    public function update(Request $request, $ma_giam_gia)
    {
        $request->validate([
            'phan_tram_giam_gia' => 'required|numeric',
            'loai_giam_gia' => 'required|in:percentage,fixed',
            'gia_tri_don_hang_toi_thieu' => 'nullable|numeric',
            'so_lan_su_dung_toi_da' => 'nullable|integer',
            'ngay_het_han_giam_gia' => 'required|date',
        ]);

        $discount = Discount::findOrFail($ma_giam_gia);
        $discount->update($request->all());
        return redirect()->route('discounts.index')->with('success', 'Cập nhật mã giảm giá thành công!');
    }

    public function destroy($ma_giam_gia)
    {
        $discount = Discount::findOrFail($ma_giam_gia);
        $discount->delete();
        return redirect()->route('discounts.index')->with('success', 'Xóa mã giảm giá thành công!');
    }
    public function show($ma_giam_gia)
{
    // Nếu không dùng thì redirect hoặc return lỗi
    return redirect()->route('discounts.index');
}

}