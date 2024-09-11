@extends('front-end.layouts.master')

@section('title', 'Shopping Cart')

@section('content')
<div class="container py-5">
    <h1 class="display-4 mb-4">{{ __('Shopping Cart') }}</h1>
    @if (session('cart') && count(session('cart')) > 0)
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>{{ __('Image') }}</th>
                            <th>{{ __('Product') }}</th>
                            <th>{{ __('Price') }}</th>
                            <th>{{ __('Quantity') }}</th>
                            <th>{{ __('Total') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (session('cart') as $id => $item)
                            <tr>
                                <td><img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" style="height: 100px; width: auto;"></td>
                                <td>{{ $item['name'] }}</td>
                                <td>৳{{ number_format($item['price'], 2) }}</td>
                                <td>
                                    <input type="number" class="form-control" value="{{ $item['quantity'] }}" min="1" max="10" onchange="updateQuantity({{ $id }}, this.value)">
                                </td>
                                <td>৳{{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                                <td>
                                    <button class="btn btn-danger btn-sm" onclick="removeFromCart({{ $id }})">{{ __('Remove') }}</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ url('/') }}" class="btn btn-secondary">{{ __('Continue Shopping') }}</a>
                <a href="{{ route('exampleEasyCheckout') }}" class="btn btn-primary">{{ __('Proceed to Checkout') }}</a>
            </div>
            <div class="col-md-4">
                <div class="card border-0 rounded shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('Cart Summary') }}</h5>
                        <p class="card-text">
                            {{ __('Subtotal:') }} ৳{{ number_format(session('cart_total'), 2) }}
                        </p>
                        <!-- Additional details like shipping cost, tax, etc. can be added here -->
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>{{ __('Your cart is empty.') }}</p>
        <a href="{{ url('/') }}" class="btn btn-primary">{{ __('Continue Shopping') }}</a>
    @endif
</div>
@endsection

@section('js')
<script src="https://js.stripe.com/v3/"></script>

<script>
    function updateQuantity(id, quantity) {
        fetch(`/cart/update/${id}/${quantity}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  location.reload();
              } else {
                  alert('Error updating quantity.');
              }
          });
    }

    function removeFromCart(id) {
        fetch(`/cart/remove/${id}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  location.reload();
              } else {
                  alert('Error removing item.');
              }
          });
    }
</script>
@endsection
