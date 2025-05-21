@extends('layouts.app')

@section('content')
<style>
    .form-container {
        max-width: 500px;
        margin: 0 auto;
        background: #f9f9f9;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    .form-group input:focus,
    .form-group select:focus {
        outline: none;
        border-color: #007bff;
    }

    .error-messages {
        color: red;
        margin-bottom: 15px;
    }

    .form-container button {
        width: 100%;
        background-color: #007bff;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .form-container button:hover {
        background-color: #0056b3;
    }
</style>

<div class="form-container">
    <h2>Create Discount</h2>

    @if ($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('discounts.store') }}">
        @csrf

        <div class="form-group">
            <label>Discount Percent:</label>
            <input type="number" step="0.01" name="discount_percent" value="{{ old('discount_percent') }}" required>
        </div>

        <div class="form-group">
            <label>Discount Type:</label>
            <select name="discount_type" required>
                <option value="percentage" {{ old('discount_type') == 'percentage' ? 'selected' : '' }}>Percentage</option>
                <option value="fixed" {{ old('discount_type') == 'fixed' ? 'selected' : '' }}>Fixed</option>
            </select>
        </div>

        <div class="form-group">
            <label>Min Order Value:</label>
            <input type="number" step="0.01" name="min_order_value" value="{{ old('min_order_value') }}">
        </div>

        <div class="form-group">
            <label>Usage Limit:</label>
            <input type="number" name="usage_limit" value="{{ old('usage_limit') }}">
        </div>

        <div class="form-group">
            <label>Discount Expiry Date:</label>
            <input type="datetime-local" name="discount_expiry_date" value="{{ old('discount_expiry_date') }}" required>
        </div>

        <button type="submit">Create</button>
    </form>
</div>
@endsection
