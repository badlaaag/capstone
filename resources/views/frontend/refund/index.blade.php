
@extends('layouts.frontend')
@section('title', 'refund')
@section('content')
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>Refund Policy</title>
<div class="breadcrumb-area pt-5 pb-2 bg-gray-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/" style="color: #686868; text-decoration:none">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Refund Policy</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container px-5 pb-3" style="color: #531516;"  >
  <p>
      We want you to be satisfied with your purchase. If you are not completely satisfied, you may request a refund within 30 days of receiving the product.
  </p>
  <p>
      To be eligible for a refund, the item must be unused and in the same condition that you received it. It must also be in the original packaging.
  </p>
  <p>
      To request a refund, please contact our customer support team at <a href="mailto:support@example.com">lixabne12@gmail.com</a> with your order details and reason for the refund. We will review your request and provide instructions on how to proceed.
  </p>
  <p>
      Once your return is received and inspected, we will send you an email to notify you that we have received your returned item. We will also notify you of the approval or rejection of your refund.
  </p>
  <p>
      If your refund is approved, a credit will be applied to your original method of payment within 5 business days.
  </p>
  <p>
      Please note that shipping costs are non-refundable. You will be responsible for paying for your own shipping costs for returning the item.
  </p>
  <p>
      If you have any further questions about our refund policy, please contact our customer support team.
  </p>
  <div class="blog-img-2">
    <a href="/refund">
        <img src="/frontend/assets/img/refund-pic/ecommerce.jpg" style="width:100% height:200px" alt="">
    </a>
</div>
</div>

{{-- <div class="container">
  <p>
    To initiate a return, please follow these steps:
  </p>
  <ol>
    <li>Contact our customer support team by email or phone to inform them about the return.</li>
    <li>Package the item(s) securely in the original packaging.</li>
    <li>Include the original invoice or proof of purchase.</li>
    <li>Ship the item(s) to the address provided by our customer support team.</li>
  </ol>
  <p>
    Once we receive the returned item(s), our team will inspect them and process your refund. Refunds will be issued to the original payment method used for the purchase.
  </p>
  <p>
    Please note that the following conditions apply to all returns:
  </p>
  <ul>
    <li>Items must be in new and unused condition.</li>
    <li>Shipping fees are non-refundable, except in cases where we have made an error.</li>
    <li>For items that are damaged or defective upon delivery, please contact our customer support team immediately for assistance.</li>
  </ul>
  <p>
    If you have any questions or concerns regarding our refund policy, please don't hesitate to contact us.
  </p>
</div> --}}


@endsection
