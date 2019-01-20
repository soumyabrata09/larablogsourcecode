@extends('layout')

@section('title', 'product details')

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fas fa-chevron-right breadcrumb-separator"></i>
        <span><a href="#">Shop</a></span>
        <i class="fas fa-chevron-right breadcrumb-separator"></i>
        <span>Product names </span>
    @endcomponent

    <div class="container">
        
    </div>
    <div class="product-section container">
        <div>
            <div class="product-section-image">
                <img src="https://laravelecommerceexample.ca/storage/products/dummy/camera-3.jpg" alt="product" class="active" id="currentImage">
            </div>
            <div class="product-section-images">
                <div class="product-section-thumbnail selected">
                    <img src="https://laravelecommerceexample.ca/storage/products/dummy/camera-3.jpg" alt="product">
                </div>

                <div class="product-section-thumbnail">
                        <img src="https://laravelecommerceexample.ca/storage/products/dummy/laptop-2.jpg" alt="product">
                </div>
                <div class="product-section-thumbnail">
                    <img src="https://laravelecommerceexample.ca/storage/products/dummy/laptop-3.jpg" alt="product">
                </div>
                <div class="product-section-thumbnail">
                    <img src="https://laravelecommerceexample.ca/storage/products/dummy/laptop-4.jpg" alt="product">
                </div>
            </div>
        </div>
        <!-- Product details section -->
        <div class="product-section-information">
            <h1 class="product-section-title">Camera 3</h1>
            <div class="product-section-subtitle">Full Frame DSLR, with 18-55mm kit lens.</div>
            <div><div class="badge badge-success">In Stock</div></div>
            <div class="product-section-price">1617.45</div>

            <p>
                Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!
            </p>

            <p>&nbsp;</p>

                <form action="https://laravelecommerceexample.ca/cart/69" method="POST">
                    <input type="hidden" name="_token" value="fYVfIDdaDL0MX41mBqT4IjEoMuyE6ThHw5GeCTvR">
                    <button type="submit" class="button button-plain">Add to Cart</button>
                </form>
            </div>
       </div>
    <!-- <div class="product-section container">
        <div>
            <div class="product-section-image">
                <img src="/img/macbook-pro.png" alt="product img not found" class="active" id="currentImage">
            </div>
            <div class="product-section-images">
                <div class="product-section-thumbnail selected">
                    <img src="/img/blog2.png" alt="product">
                </div>

                
                    <div class="product-section-thumbnail">
                        <img src="/img/blog1.png" alt="product">
                    </div>
                   
            </div>
        </div>
        <div class="product-section-information">
            <h1 class="product-section-title">Product Name</h1>
            <div class="product-section-subtitle">Product details</div>
            <div>stock level</div>
            <div class="product-section-price">43,000</div>

            <p>
                product description goes here
            </p>

            <p>&nbsp;</p>

           
                <form action="#" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="button button-plain">Add to Cart</button>
                </form>
            
        </div>
    </div>  -->
    <!-- end product-section -->
    <div class="might-like-section">
    <div class="container">
        <h2>You might also like...</h2>
        <div class="might-like-grid">
                <a href="https://laravelecommerceexample.ca/shop/appliance-8" class="might-like-product">
                    <img src="https://laravelecommerceexample.ca/storage/products/dummy/appliance-8.jpg" alt="product">
                    <div class="might-like-product-name">Appliance 8</div>
                    <div class="might-like-product-price">1344.48</div>
                </a>
                <a href="https://laravelecommerceexample.ca/shop/laptop-10" class="might-like-product">
                    <img src="https://laravelecommerceexample.ca/storage/products/dummy/laptop-10.jpg" alt="product">
                    <div class="might-like-product-name">Laptop 10</div>
                    <div class="might-like-product-price">2164.87</div>
                </a>
                <a href="https://laravelecommerceexample.ca/shop/laptop-15" class="might-like-product">
                    <img src="https://laravelecommerceexample.ca/storage/products/dummy/laptop-15.jpg" alt="product">
                    <div class="might-like-product-name">Laptop 15</div>
                    <div class="might-like-product-price">1844.17</div>
                </a>
                <a href="https://laravelecommerceexample.ca/shop/camera-8" class="might-like-product">
                    <img src="https://laravelecommerceexample.ca/storage/products/dummy/camera-8.jpg" alt="product">
                    <div class="might-like-product-name">Camera 8</div>
                    <div class="might-like-product-price">1959.28</div>
                </a>
            
        </div><br />
    </div>

@endsection

@section('extra-js')
   

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <!-- <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script> -->

@endsection

