<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cart Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .cart-item {
      border-bottom: 1px solid #dee2e6;
      padding: 20px 0;
    }
    .product-img {
      width: 80px;
      height: 80px;
      object-fit: contain;
    }
    .quantity-btn {
      width: 32px;
      height: 32px;
      padding: 0;
    }
    .summary-box {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
    }
    .btn-blue {
      background-color: #007bff;
      color: white;
    }
  </style>
</head>
<body>

<div class="container my-5">
  <div class="row">
    <!-- Cart Products -->
    <div class="col-lg-8">
      <div class="bg-white p-4 rounded shadow-sm">
        <h5 class="mb-4">Shopping Cart</h5>

        <!-- Product 1 -->
        <div class="cart-item d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center gap-3">
            <img src="https://via.placeholder.com/80" class="product-img" alt="Product 1">
            <div>
              <h6 class="mb-1">Lorem ipsum dolor sit amet</h6>
              <small>Color: Black | Size: M</small><br>
              <a href="#" class="text-danger text-decoration-none small">🗑 Remove</a>
            </div>
          </div>
          <div class="text-end">
            <p class="mb-1">$89.99</p>
            <div class="input-group">
              <button class="btn btn-outline-secondary quantity-btn">-</button>
              <input type="text" class="form-control text-center" value="1" style="width: 40px;">
              <button class="btn btn-outline-secondary quantity-btn">+</button>
            </div>
            <strong class="d-block mt-1">$89.99</strong>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="cart-item d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center gap-3">
            <img src="https://via.placeholder.com/80" class="product-img" alt="Product 2">
            <div>
              <h6 class="mb-1">Consectetur adipiscing elit</h6>
              <small>Color: White | Size: L</small><br>
              <a href="#" class="text-danger text-decoration-none small">🗑 Remove</a>
            </div>
          </div>
          <div class="text-end">
            <p class="mb-1">$64.99 <del class="text-muted">$79.99</del></p>
            <div class="input-group">
              <button class="btn btn-outline-secondary quantity-btn">-</button>
              <input type="text" class="form-control text-center" value="2" style="width: 40px;">
              <button class="btn btn-outline-secondary quantity-btn">+</button>
            </div>
            <strong class="d-block mt-1">$129.98</strong>
          </div>
        </div>

        <!-- Product 3 -->
        <div class="cart-item d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center gap-3">
            <img src="https://via.placeholder.com/80" class="product-img" alt="Product 3">
            <div>
              <h6 class="mb-1">Sed do eiusmod tempor</h6>
              <small>Color: Blue | Size: S</small><br>
              <a href="#" class="text-danger text-decoration-none small">🗑 Remove</a>
            </div>
          </div>
          <div class="text-end">
            <p class="mb-1">$49.99</p>
            <div class="input-group">
              <button class="btn btn-outline-secondary quantity-btn">-</button>
              <input type="text" class="form-control text-center" value="1" style="width: 40px;">
              <button class="btn btn-outline-secondary quantity-btn">+</button>
            </div>
            <strong class="d-block mt-1">$49.99</strong>
          </div>
        </div>

        <!-- Coupon and buttons -->
        <div class="d-flex justify-content-between align-items-center mt-4">
          <div class="input-group w-50">
            <input type="text" class="form-control" placeholder="Coupon code">
            <button class="btn btn-primary">Apply</button>
          </div>
          <div>
            <button class="btn btn-outline-secondary me-2">Clear</button>
            <button class="btn btn-outline-success">Update</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Order Summary -->
    <div class="col-lg-4 mt-4 mt-lg-0">
      <div class="summary-box shadow-sm">
        <h5 class="mb-3">Order Summary</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between">Subtotal <span>$269.96</span></li>
          <li class="list-group-item">
            <p class="mb-1">Shipping</p>
            <div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="shipping" checked>
                <label class="form-check-label">Standard Delivery - $4.99</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="shipping">
                <label class="form-check-label">Express Delivery - $12.99</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="shipping">
                <label class="form-check-label">Free Shipping (Orders over $300)</label>
              </div>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between">Tax <span>$27.00</span></li>
          <li class="list-group-item d-flex justify-content-between">Discount <span class="text-success">-$0.00</span></li>
          <li class="list-group-item d-flex justify-content-between fw-bold">Total <span>$301.95</span></li>
        </ul>
        <button class="btn btn-blue w-100 mt-3">Proceed to Checkout →</button>
        <button class="btn btn-outline-secondary w-100 mt-2">← Continue Shopping</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
