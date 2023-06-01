@extends('layouts.frontend')
@section('title', 'faqs')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/form.css') }}"> --}}
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>FAQS</title>


<div class="breadcrumb-area pt-5 pb-2 bg-gray-3" style="color: #531516;">
    <div class="container">
        <nav aria-label="breadcrumb" style="color: #531516;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" style="color: #531516;">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
            </ol>
        </nav>
    </div>
</div>

{{-- ============================================================================================= --}}
<div class="container px-5">
  <div class="blog-img-2">
    <a href="/faqs">
        <img src="/frontend/assets/img/faqs-pic/ecommercelive.jpg" alt="">
    </a>
</div>
    <div class="accordion"  id="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" style="color: #531516;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Question 1: What payment methods do you accept?
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            Answer: We accept all major credit cards, including Visa, Mastercard, and American Express.
          </div>
        </div>
      </div>
      {{-- ============================================================================================ --}}
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed"  style="color: #531516;" type="button"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Question 2: What is your return policy?
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
          <div class="card-body">
            Answer: We have a 30-day return policy. If you're not satisfied with your purchase, you can return it within 30 days for a full refund.
          </div>
        </div>
      </div>
      {{-- ============================================================================================= --}}
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" style="color: #531516;" type="button"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Question 3: How can I place an order?
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
          <div class="card-body">
            Answer: <p>To place an order, please follow these steps:</p>
            <ol>
              <li>Visit our website and browse the products.</li>
              <li>Select the desired product and click on "Add to Cart".</li>
              <li>Review your cart and click on "Checkout".</li>
              <li>Fill in the required information and choose your preferred payment method.</li>
              <li>Click on "Place Order" to complete the purchase.</li>
            </ol> 
          </div>
        </div>
      </div>
      {{-- ============================================================================================== --}}
      <div class="card">
        <div class="card-header" id="headingfour">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" style="color: #531516;"   data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Question 4: What is customer support in e-commerce?
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion4">
          <div class="card-body">
            Answer: Customer support in e-commerce involves providing assistance to customers throughout their shopping experience. It can include various channels such as live chat, email, phone support, and self-service options. Prompt and effective customer support helps address queries, resolve issues, and enhance customer satisfaction.
          </div>
        </div>
      </div>
      {{-- ============================================================================================= --}}


    </div>
  </div>
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection