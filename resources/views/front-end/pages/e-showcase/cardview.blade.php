<!-- resources/views/cart/view.blade.php -->
@extends('front-end.layouts.master')

@section('title', 'Cart')
<br>
<br>
<br>
@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Shopping Carts</h2>
        @if (count($cart) > 0)
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $id => $item)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover; margin-right: 15px;">
                                        <span>{{ $item['name'] }}</span>
                                    </div>
                                </td>
                                <td>৳{{ number_format($item['price'], 2) }}</td>
                                <td class="text-center">
                                    <div class="input-group" style="width: 120px; margin: 0 auto;">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary btn-sm" type="button" onclick="updateCartItemQuantity('{{ $id }}', 'decrease')">-</button>
                                        </div>
                                        <input type="text" class="form-control text-center" value="{{ $item['quantity'] }}" readonly>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-sm" type="button" onclick="updateCartItemQuantity('{{ $id }}', 'increase')">+</button>
                                        </div>
                                    </div>
                                </td>
                                <td>৳{{ number_format((float)$item['price'] * (int)$item['quantity'], 2) }}</td>
                                <td>
                                    <button class="btn btn-danger btn-sm" onclick="removeCartItem('{{ $id }}')">Remove</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-right"><strong>Total:</strong></td>
                            <td colspan="2"><strong>৳{{ number_format(array_sum(array_map(function($item) {
                                return (float)$item['price'] * (int)$item['quantity'];
                            }, $cart)), 2) }}</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="text-right">
                <a href="{{ route('checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
            </div>
        @else
            <p class="text-center">Your cart is empty.</p>
        @endif
    </div>
    <br>
    <br>
    <br>
@endsection

@section('styles')
    <style>
        .table td, .table th {
            vertical-align: middle;
        }


        .table img {
            max-width: 100%;
        }
    </style>
@endsection

@section('js')
    <script>
        function updateCartItemQuantity(id, action) {
            console.log(id, action)
            let url = `/cart/update/${id}/${action}`;
            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(response => response.json())
              .then(data => {

                    console.log(data)
                  if (data.success) {
                      location.reload();
                  } else {
                      alert('Failed to update quantity.');
                  }
              });
        }

        function removeCartItem(id) {
            console.log('fired')
            if (confirm('Are you sure you want to remove this item?')) {
                let url = `/cart/remove/${id}`;
                fetch(url, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(response => response.json())
                  .then(data => {
                    // console.log(data);
                      if (data.success) {
                          location.reload();
                      } else {
                          alert('Failed to remove item.');
                      }
                  });
            }
        }
    </script>
@endsection
