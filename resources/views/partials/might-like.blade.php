<div class="might-like-section">
    <div class="container">
        <h2>You might also like...</h2>
        <div class="might-like-grid">
        @foreach($mayAlsoLike as $element)
            <a href="{{ route('shop.show', $element->slug) }}" class="might-like-product">
                <img src="{{ asset('img/'.$element->slug.'.jpg') }}" alt="product">
                <div class="might-like-product-name">{{ $element->name }}</div>
                <div class="might-like-product-price">{{ $element->price }}</div>
            </a>
        @endforeach
                <!-- <a href="https://laravelecommerceexample.ca/shop/tablet-7" class="might-like-product">
                    <img src="https://laravelecommerceexample.ca/storage/products/dummy/tablet-7.jpg" alt="product">
                    <div class="might-like-product-name">Tablet 7</div>
                    <div class="might-like-product-price">$780.61</div>
                </a>
                <a href="https://laravelecommerceexample.ca/shop/phone-7" class="might-like-product">
                    <img src="https://laravelecommerceexample.ca/storage/products/dummy/phone-7.jpg" alt="product">
                    <div class="might-like-product-name">Phone 7</div>
                    <div class="might-like-product-price">$1338.82</div>
                </a>
                <a href="https://laravelecommerceexample.ca/shop/camera-4" class="might-like-product">
                    <img src="https://laravelecommerceexample.ca/storage/products/dummy/camera-4.jpg" alt="product">
                    <div class="might-like-product-name">Camera 4</div>
                    <div class="might-like-product-price">$1912.03</div>
                </a> -->
            
        </div>
    </div>
</div>