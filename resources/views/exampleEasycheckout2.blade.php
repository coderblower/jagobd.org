<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .payment-method {
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 5px;
            padding: 10px;
            transition: border-color 0.3s ease;
        }
        .payment-method.selected {
            border-color: #28a745; /* Green border when selected */
        }
        .payment-method img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Checkout Page</h1>

        <form action="" method="POST">
            @csrf
            <!-- User Information -->
            <div class="card mb-4">
                <div class="card-header">User Information</div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" name="first_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Information -->
            <div class="card mb-4">
                <div class="card-header">Product Information</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody id="productList">
                                <tr>
                                    <td>Product 1</td>
                                    <td class="product-price">$100</td>
                                    <td><input type="number" class="form-control quantity" value="1" min="1"></td>
                                    <td class="product-total">$100</td>
                                </tr>
                                <tr>
                                    <td>Product 2</td>
                                    <td class="product-price">$50</td>
                                    <td><input type="number" class="form-control quantity" value="1" min="1"></td>
                                    <td class="product-total">$50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="discount_code">Discount Code</label>
                            <input type="text" class="form-control" id="discount_code" placeholder="Enter discount code">
                        </div>
                        <div class="col-md-6">
                            <button type="button" id="applyDiscount" class="btn btn-primary mt-4">Apply Discount</button>
                        </div>
                    </div>

                    <hr>

                    <!-- Total Price Display -->
                    <div class="form-row">
                        <div class="col-md-6">
                            <h4>Total Amount</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <h4 id="totalAmount">$150</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Method Selection (Clickable Images) -->
            <div class="card mb-4">
                <div class="card-header">Payment Method</div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="payment-method" data-method="paypal">
                                <img src="https://example.com/paypal-logo.png" alt="PayPal">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="payment-method" data-method="stripe">
                                <img src="https://example.com/stripe-logo.png" alt="Stripe">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="payment-method" data-method="razorpay">
                                <img src="https://example.com/razorpay-logo.png" alt="Razorpay">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hidden input to store selected payment method -->
            <input type="hidden" name="payment_method" id="payment_method" required>

            <button type="submit" class="btn btn-success btn-block">Checkout</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // JavaScript to handle payment method selection
        $('.payment-method').on('click', function() {
            // Remove selected class from all payment methods
            $('.payment-method').removeClass('selected');
            // Add selected class to the clicked payment method
            $(this).addClass('selected');

            // Get the selected payment method from data attribute
            const selectedMethod = $(this).data('method');

            // Set the hidden input value with the selected method
            $('#payment_method').val(selectedMethod);
        });

        // Update Total Amount on Quantity Change
        $('.quantity').on('input', function() {
            updateTotal();
        });

        function updateTotal() {
            let totalAmount = 0;
            $('#productList tr').each(function() {
                const price = parseFloat($(this).find('.product-price').text().replace('$', ''));
                const quantity = parseInt($(this).find('.quantity').val());
                const total = price * quantity;
                $(this).find('.product-total').text('$' + total.toFixed(2));
                totalAmount += total;
            });
            $('#totalAmount').text('$' + totalAmount.toFixed(2));
        }

        // Apply Discount (Example only, no validation)
        $('#applyDiscount').on('click', function() {
            const discountCode = $('#discount_code').val();
            let totalAmount = parseFloat($('#totalAmount').text().replace('$', ''));
            if (discountCode === 'DISCOUNT10') {
                totalAmount *= 0.9; // 10% discount
            }
            $('#totalAmount').text('$' + totalAmount.toFixed(2));
        });
    </script>
</body>
</html>
