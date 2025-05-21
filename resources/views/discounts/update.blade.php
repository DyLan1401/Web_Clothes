@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Discount</h1>

        @if(isset($discount) && $discount->discount_id)
            <form action="{{ route('discounts.update', ['discount_id' => $discount->discount_id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="discount_percent">Discount Percent</label>
                    <input type="number" name="discount_percent" class="form-control" value="{{ $discount->discount_percent ?? 0 }}" step="0.01" required>
                </div>

                <div class="form-group">
                    <label for="discount_type">Discount Type</label>
                    <select name="discount_type" class="form-control" required>
                        <option value="percentage" {{ $discount->discount_type == 'percentage' ? 'selected' : '' }}>Percentage</option>
                        <option value="fixed" {{ $discount->discount_type == 'fixed' ? 'selected' : '' }}>Fixed</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="min_order_value">Minimum Order Value</label>
                    <input type="number" name="min_order_value" class="form-control" value="{{ $discount->min_order_value ?? '' }}" step="0.01">
                </div>

                <div class="form-group">
                    <label for="usage_limit">Usage Limit</label>
                    <input type="number" name="usage_limit" class="form-control" value="{{ $discount->usage_limit ?? '' }}">
                </div>

                <div class="form-group">
                    <label for="discount_expiry_date">Expiry Date</label>
                    <input type="date" name="discount_expiry_date" class="form-control" value="{{ $discount->discount_expiry_date ?? '' }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        @else
            <p>No discount information found to edit. Please check the discount ID in the URL or ensure the discount exists in the database.</p>
        @endif
    </div>
@endsection