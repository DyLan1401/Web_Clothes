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
            'discount_percent' => 'required|numeric',
            'discount_type' => 'required|in:percentage,fixed',
            'min_order_value' => 'nullable|numeric',
            'usage_limit' => 'nullable|integer',
            'discount_expiry_date' => 'required|date',
        ]);
        Discount::create($request->all());
        return redirect()->route('discounts.index')->with('success', 'Discount created.');
    }

    public function edit($discount_id)
    {
        $discount = Discount::find($discount_id); // Tìm theo discount_id
        if (!$discount) {
            return redirect()->route('discounts.index')->with('error', 'Discount not found.');
        }
        return view('discounts.update', compact('discount'));
    }

   public function update(Request $request, $discount_id)
{
    $discount = Discount::findOrFail($discount_id);

    $request->validate([
        'discount_percent' => 'required|numeric',
        'discount_type' => 'required|in:percentage,fixed',
        'min_order_value' => 'nullable|numeric',
        'usage_limit' => 'nullable|integer',
        'discount_expiry_date' => 'required|date',
    ]);

    $discount->update($request->only([
        'discount_percent',
        'discount_type',
        'min_order_value',
        'usage_limit',
        'discount_expiry_date'
    ]));

    return redirect()->route('discounts.index')->with('success', 'Discount updated.');
}

    public function destroy(Discount $discount)
    {
        $discount->delete();
        return redirect()->route('discounts.index')->with('success', 'Discount deleted.');
    }

    public function dashboard()
    {
        $discounts = Discount::all();
        return view('dashboard', compact('discounts'));
    }
}