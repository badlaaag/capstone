
@extends('layouts.frontend')
@section('title', 'returns')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/return.css') }}">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<title>eCommerce Returns</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="breadcrumb-area pt-5 pb-2 bg-gray-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/" style="color: #686868; text-decoration:none">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Returns</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container1 mb-5">
    {{-- <h1 class="" style="color: #531516;">Returns</h1> --}}
    <form id="returnForm">
      <div class="form-group">
        <input type="text" class="form-control" id="orderNumber" placeholder="Order Number*" required>
      </div>

      <div class="form-group">
        <textarea class="form-control" placeholder="Reason for Return*" id="reason" rows="3" required></textarea>
      </div>

      <button type="submit" class="submit" >Submit</button>
    </form>

    <div id="successMessage" class="alert alert-success mt-3 pb-5" style="display: none;">
      Return request submitted successfully!
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    document.getElementById('returnForm').addEventListener('submit', function(event) {
      event.preventDefault();

      // Retrieve form values
      var orderNumber = document.getElementById('orderNumber').value;
      var reason = document.getElementById('reason').value;

      // Perform form validation
      if (orderNumber.trim() === '' || reason.trim() === '') {
        alert('Please fill in all fields.');
        return;
      }

      // Simulate submitting the form
      // You can replace this with your own logic to submit the form to a server
      setTimeout(function() {
        document.getElementById('returnForm').reset();
        document.getElementById('successMessage').style.display = 'block';
      }, 1000);
    });
  </script>


@endsection
