@extends('layouts.frontend')
@section('title', 'Shop products')
@section('content')
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3"><div class="container"><nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Home</a></li><li class="breadcrumb-item active" aria-current="page">Shop</li></ol></nav></div></div>
    <div class="shop-page-wrapper shop-page-padding ptb-100">
        <div class="container-fluid m-auto">
            <div class="row">
                <div class="col-lg-3">
                    @include('frontend.shop.sidebar')
                </div>
                <div class="col-lg-9">
                    <livewire:shop.product-component  :slug="$slug"/>
                </div>
            </div>
        </div>
    </div>
@endsection

