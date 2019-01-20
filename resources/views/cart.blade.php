@extends('layout')

@section('title', 'Shopping Cart')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="#">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shopping Cart</span>
    @endcomponent

    <div class="cart-section container">
        <div>
            
            
            
                <h3>No items in Cart!</h3>
                <div class="spacer"></div>
                <a href="/shop" class="button">Continue Shopping</a>
                <div class="spacer"></div>

            
            
            <h3>You have no items Saved for Later.</h3>

            
        </div>

    </div>

    @include('partials.might-like')


@endsection


