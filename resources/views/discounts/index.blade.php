@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Discounts List</h1>
        <a href="{{ route('discounts.create') }}" class="create-btn">Thêm mã giảm giá</a>

    @if ($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
        <table class="table">
            <thead>
                <tr>
                   <th>ID</th>
                <th>Discount Percent</th>
                <th>Discount Type</th>
                <th>Min Order Value</th>
                <th>Usage Limit</th>
                <th>Expiry Date</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
               @foreach($discounts as $discount)
                <tr>
                    <td>{{ $discount->discount_id }}</td>
                    <td>{{ $discount->discount_percent }}</td>
                    <td>{{ $discount->discount_type }}</td>
                    <td>{{ $discount->min_order_value ?? 'N/A' }}</td>
                    <td>{{ $discount->usage_limit ?? 'N/A' }}</td>
                    <td>{{ $discount->discount_expiry_date }}</td>
                    <td class="actions">
                        <a href="{{ route('discounts.edit', $discount->discount_id) }}">Edit</a>
                        <form action="{{ route('discounts.destroy', $discount->discount_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this discount?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection