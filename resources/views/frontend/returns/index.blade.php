
@extends('layouts.frontend')
@section('title', 'returns')
@section('content')
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>eCommerce Returns</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .container1 {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
    }
  </style>
<div class="breadcrumb-area pt-5 pb-2 bg-gray-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Returns</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container1">
    <h1>Returns</h1>

    <form id="returnForm">
      <div class="form-group">
        <label for="orderNumber">Order Number</label>
        <input type="text" class="form-control" id="orderNumber" required>
      </div>

      <div class="form-group">
        <label for="reason">Reason for Return</label>
        <textarea class="form-control" id="reason" rows="3" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div id="successMessage" class="alert alert-success mt-4" style="display: none;">
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
