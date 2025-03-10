@extends('frontend.layouts.app')

@section('styles')
<style>
    .dropdown-menu { display: none; }
    .dropdown:hover .dropdown-menu { display: block; }
    .nav-icon-btn { width: 40px; height: 40px; }
    .cart-item-img { width: 100px; height: 80px; object-fit: cover; }
</style>
@endsection

@section('content')

<!-- Main Content -->
<main class="container my-4">
    {{-- <div class="d-flex justify-content-between mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">1. Cart (3)</li>
                <li class="breadcrumb-item">2. Payment</li>
            </ol>
        </nav>
        
        <div>
            <a href="#" class="text-decoration-none">
                <i class="fas fa-arrow-left"></i> Continue shopping
            </a>
            <a href="#" class="text-decoration-none ms-3">
                <i class="fas fa-share"></i> Share your cart
            </a>
        </div>
    </div> --}}

    <div class="row">

        <div class="mt-4">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">1. Cart({{ 3 }})</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="link1-tab" data-bs-toggle="tab" href="#link1" role="tab"
                        aria-controls="link1" aria-selected="false">2. Payment</a>
                </li>
            </ul>

            <!-- Tab content -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mt-4">
                        <div class="col-lg-8 mb-4">
                            @foreach ($cartItems as $item)
                                <div class="card shadow-sm mb-2">
                                    <div class="">
                                        <!-- Cart Items -->
                                        <div class="d-flex ">
                                            <div class="">
                                                <img src="https://storage.googleapis.com/a1aa/image/8Qfoxi-S872FKLAYhe19z5AkQY1tAuRxBXcze0W2hFY.jpg" 
                                                    class="cart-item-img me-3" alt="Product">
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="">
                                                    <h5 class="mb-1">{{ $item->product->title }}</h5>
                                                    <p class="text-muted mb-1">#{{ $item->product->id }} - 3D model</p>
                                                    <span class="text-danger text-decoration-line-through me-2">${{ $item->product->price * 1.1}}</span>
                                                    <span class="text-success">${{ $item->product->price }}</span>
                                                </div>
                                            </div>
                                            <form action="{{ route('cart.remove') }}" method="POST" class="d-flex justify-content-center align-items-center">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $item->product->id }}">
                                                <button type="submit" class="btn btn-link text-muted ">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </form>
                                        </div>
                
                                        <!-- Repeat similar structure for other cart items -->
                                        
                                    </div>
                                </div> 
                            @endforeach
                        </div>
                
                        <!-- Order Summary -->
                        <div class="col-lg-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Order Summary</h5>
                                    
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted">Subtotal:</span>
                                        <span>${{ $totalPrice }}.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted">Discount:</span>
                                        <span class="text-danger">- $00.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted">Value Added Tax:</span>
                                        <span>$0.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4">
                                        <span class="text-muted">Final price:</span>
                                        <span class="fw-bold">${{ $totalPrice }}.00</span>
                                    </div>
                
                                    <button class="btn btn-primary w-100">Continue to Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="link1" role="tabpanel" aria-labelledby="link1-tab">
                    <div class="row mt-4">
                        <div class="col-lg-8 mb-4">
                            <!-- Order Summary -->
                            <div class="bg-white shadow rounded-lg p-4 flex-1">
                                <h2 class="h5 fw-semibold mb-4">
                                Order summary
                                </h2>
                                <div class="border-top pt-4">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Subtotal:</span>
                                        <span>${{ $totalPrice }}.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Discount:</span>
                                        <span>-$0.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Value Added Tax:</span>
                                        <span>$0.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between fw-semibold">
                                        <span>Final price:</span>
                                        <span>${{ $totalPrice }}.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 shadow p-4">
                                <label class="d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox"/>
                                    <span class="ms-2">
                                    Purchase as a company
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <!-- Payment Methods -->
                            <div class="bg-white shadow-sm rounded-lg flex-1">
                                <h2 class="h5 fw-semibold my-4 ms-2">
                                Choose a way to pay
                                </h2>
                                <div class="space-y-4 shadow">
                                    <div class="border border-secondary rounded p-2 d-flex align-items-center mb-2">
                                        <input class="form-check-input me-2 payment-radio" name="payment" type="radio" id="card"/>
                                        <img alt="Card payment icon" class="me-3" height="40" src="https://storage.googleapis.com/a1aa/image/IOYaWpj8Hg5liRozAzuhVKkfwljAEhSHkZpjLreB1jg.jpg" width="40"/>
                                        <label for="card" class="form-check-label">Card</label>
                                    </div>
                                    <div class="border border-secondary rounded p-2 d-flex align-items-center mb-2">
                                        <input class="form-check-input me-2 payment-radio" name="payment" type="radio" id="PayPal"/>
                                        <img alt="PayPal payment icon" class="me-3" height="40" src="https://storage.googleapis.com/a1aa/image/IOYaWpj8Hg5liRozAzuhVKkfwljAEhSHkZpjLreB1jg.jpg" width="40"/>
                                        <label for="PayPal" class="form-check-label">PayPal</label>
                                    </div>
                                    <div class="border border-secondary rounded p-2 d-flex align-items-center mb-2">
                                        <input class="form-check-input me-2 payment-radio" name="payment" type="radio" id="googlePay"/>
                                        <img alt="Google Pay icon" class="me-3" height="40" src="https://storage.googleapis.com/a1aa/image/IOYaWpj8Hg5liRozAzuhVKkfwljAEhSHkZpjLreB1jg.jpg" width="40"/>
                                        <label for="googlePay" class="form-check-label">Google Pay</label>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('paypal.payment') }}" class="">
                                @csrf
                                <button type="submit" class="mt-4 w-100 btn btn-primary" id="payButton" disabled>
                                    Pay ${{ $totalPrice }}.00
                                </button>
                                <p class="text-muted small mt-2">
                                    All sensitive data is processed via Braintree.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
// Lắng nghe sự kiện cho tất cả các radio button có class 'payment-radio'
const radios = document.querySelectorAll('.payment-radio');

    radios.forEach(radio => {
        radio.addEventListener('change', function() {
        const payButton = document.getElementById('payButton');
        if (document.querySelector('.payment-radio:checked')) {
            payButton.disabled = false; // Bỏ disabled nếu có radio được chọn
        } else {
            payButton.disabled = true; // Nếu không có radio nào được chọn thì giữ disabled
        }
        });
    });

</script>

@endsection