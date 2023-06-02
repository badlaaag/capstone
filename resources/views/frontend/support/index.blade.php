@extends('layouts.frontend')
@section('title', 'support')
@section('content')
{{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/form.css') }}"> --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<title>Contact Us</title>
<div class="breadcrumb-area pt-5 pb-2 bg-gray-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/" style="color: #686868; text-decoration:none">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Support Policy</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container mt-4" style="color: #531516;">
    
    <p>At <b>Tech-O-Matic </b> Website, we strive to provide excellent support to our valued customers. Please review our support policy below:</p>

    <h3>Contacting Support</h3>
    <p>If you have any questions or need assistance, you can reach our support team by:</p>
    <ul>
        <li>Phone: 1-800-123-4567</li>
        <li>Email: supportteam@technomatic.com</li>
        <li>Live Chat: Available on our website during business hours</li>
    </ul>

    <h3>Support Hours</h3>
    <p>Our support team is available during the following hours:</p>
    <ul>
        <li>Monday to Friday: 9am - 5pm (EST)</li>
        <li>Weekends and holidays: Closed</li>
    </ul>

    <h3>Response Time</h3>
    <p>We aim to respond to all support inquiries within 24 hours. However, please note that response times may vary depending on the volume of requests we receive.</p>

    <h3>Issue Resolution</h3>
    <p>We strive to resolve all support issues in a timely manner. The time it takes to resolve an issue depends on its complexity. We will provide regular updates and work diligently to resolve the issue as quickly as possible.</p>

    <h3>Returns and Refunds</h3>
    <p>Please refer to our <a href="/returns">Returns</a> and <a href="/refund">Refunds Policy</a> for information on returning products and refund requests.</p>
</div>
@endsection
