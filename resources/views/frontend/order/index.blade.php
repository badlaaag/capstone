@extends('layouts.frontend')
@section('title', 'order')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/form.css') }}">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<title>Orders Tracking</title>
<div class="breadcrumb-area pt-5 pb-2 bg-gray-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Orders Tracking</li>
            </ol>
        </nav>
    </div>
</div>

@endsection
