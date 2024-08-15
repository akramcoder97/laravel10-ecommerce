@extends('layouts.base')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">

        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Checkout</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section Start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <form class="needs-validation" method="post" action="{{route('place.order')}}">
                        @csrf
                        <div id="billingAddress" class="row g-4">
                            <h3 class="mb-3 theme-color">Billing address</h3>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Full Name">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Enter Phone Number">
                            </div>
                            <div class="col-md-6">
                                <label for="locality" class="form-label">Wilaya</label>
                                <input type="text" class="form-control" id="locality" name="wilaya"
                                    placeholder="Wilaya">
                            </div>
                            <div class="col-md-6">
                                <label for="landmark" class="form-label">Commune</label>
                                <input type="text" class="form-control" id="landmark" name="commune"
                                    placeholder="Commune">
                            </div>

                            <div class="col-md-12">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address"></textarea>

                            </div>

                        </div>
                        <!-- product info -->
                        <div>
                            @foreach($cartItems as $item)
                               <input type="hidden" name="productname" value="{{$item->model->name}}">
                               <input type="hidden" name="price" value="{{$item->price}}">
                               <input type="hidden" name="qty" value="{{$item->qty}}">
                               <input type="hidden" name="subtotal" value="{{$item->subtotal()}}"> 
                               <input type="hidden" name="total" value="{{cart::instance('cart')->total()}}"> 
                               
                            @endforeach
                        </div>

                        <!-- <div class="form-check ps-0 mt-3 custome-form-check">
                            <input class="checkbox_animated check-it" type="checkbox" name="saveAddress"
                                id="saveAddress">
                            <label class="form-check-label checkout-label" for="saveAddress">Save this information for
                                next time</label>
                        </div> -->

                        <hr class="my-lg-5 my-4">

                        <h3 class="mb-3">Payment</h3>

                        <div class="d-block my-3">
                            <div class="form-check custome-radio-box">
                                <input class="form-check-input" type="radio" checked=""
                                    id="cod">
                                <label class="form-check-label" for="cod">COD</label>
                            </div>
                            <!-- <div class="form-check custome-radio-box">
                                <input class="form-check-input" type="radio" name="debitCart" id="debit">
                                <label class="form-check-label" for="debit">Debit card</label>
                            </div>

                            <div class="form-check custome-radio-box">
                                <input class="form-check-input" type="radio" name="paypal" id="paypal">
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div> -->
                        </div>
                        <div class="row g-4" style="display: none;">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Name on card</label>
                                <input type="text" class="form-control" id="cc-name">
                                <div id="emailHelp" class="form-text">Full name as displayed on card</div>
                            </div>
                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number">
                                <div class="invalid-feedback">Credit card number is required</div>
                            </div>
                            <div class="col-md-3">
                                <label for="expiration" class="form-label">Expiration</label>
                                <input type="text" class="form-control" id="expiration">
                            </div>
                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv">
                            </div>
                        </div>
                        <button class="btn btn-solid-default mt-4" type="submit">Place Order</button> 
                    </form>
                </div>

                <div class="col-lg-4">
                    <div class="your-cart-box">
                        <h3 class="mb-3 d-flex text-capitalize">Your cart<span
                                class="badge bg-theme new-badge rounded-pill ms-auto bg-dark">0</span>
                        </h3>
                        <ul class="list-group mb-3">



                            <li class="list-group-item d-flex justify-content-between lh-condensed active">
                                <div class="text-dark">
                                    <h6 class="my-0">Tax</h6>
                                    <small></small>
                                </div>
                                <span>$0.00</span>
                            </li>
                            
                            <li class="list-group-item d-flex lh-condensed justify-content-between">
                                <span class="fw-bold">Total (USD)</span>
                                <strong>${{cart::instance('cart')->total()}}</strong>
                            </li>
                        </ul>
                        <form class="card border-0">
                            <div class="input-group custome-imput-group">
                                <input type="text" class="form-control" placeholder="Promo code">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-solid-default rounded-0">Redeem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->


    @if (Session::has('message'))
    <script>
        swal("message","{{ Session::get('message') }}",'success',{
            button:true,
            button:"Ok",
            timmer:3000,
        })
       // Swal.fire("SweetAlert2 is working!");
    </script>
    @endif

@endsection