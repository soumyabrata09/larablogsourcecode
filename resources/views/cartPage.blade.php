@extends('layout')

@section('title', 'Shopping Cart')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shopping Cart</span>
    @endcomponent

    <div class="wrap cf">
  <!-- <h1 class="projTitle">Responsive Table<span>-Less</span> Shopping Cart</h1> -->
  <div class="heading cf">
    <h1>User's cart
    </h1>
    <!-- <div class="alert-success curve-box">Items added successfully in your cart</div> -->
    <!-- cheking whether any is been added successfully to cart else printing the list of error messages if any -->
   @if(session()->has('success_message'))
     <div class="alert-success curve-box">
      {{session()->get('success_message')}}
     </div> 
   @endif
   @if(count($errors)>0)
     <div class="alert-danger curve-box">
        <ul>
          @foreach($errors->all() as $error_msg)
            <li>{{$error_msg}}</li>
          @endforeach
        </ul>
     </div>
   @endif
    <a href="{{route('shop.index')}}" class="continue">Continue Shopping</a>
   
  </div>
  <div>You have 4 item(s) in your cart</div>
  <div class="cart">
<!--    <ul class="tableHead">
      <li class="prodHeader">Product</li>
      <li>Quantity</li>
      <li>Total</li>
       <li>Remove</li>
    </ul>-->
    <ul class="cartWrap">
      <li class="items odd">
        
    <div class="infoWrap"> 
        <div class="cartSection">
        <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
          <p class="itemNumber">#QUE-007544-002</p>
          <h3>Item Name 1</h3>
        
           <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>
        
          <p class="stockStatus"> In Stock</p>
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p>$15.00</p>
        </div>
           <div class="cartSection removeWrap">
           <a href="#" class="remove">x</a>
<!--              <a>Add to Wishlist</a> -->
        </div>
      </div>
      </li>
      <li class="items even">
        
       <div class="infoWrap"> 
        <div class="cartSection">
         
        <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
          <p class="itemNumber">#QUE-007544-002</p>
          <h3>Item Name 1</h3>
        
           <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>
        
          <p class="stockStatus"> In Stock</p>
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p>$15.00</p>
        </div>
              <div class="cartSection removeWrap">
           <a href="#" class="remove">x</a>
        </div>
      </div>
      </li>
      
            <li class="items odd">
             <div class="infoWrap"> 
        <div class="cartSection">
            
        <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
          <p class="itemNumber">#QUE-007544-002</p>
          <h3>Item Name 1</h3>
        
           <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>
        
          <p class="stockStatus out"> Out of Stock</p>
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p>$15.00</p>
        </div>
                    <div class="cartSection removeWrap">
           <a href="#" class="remove">x</a>
        </div>
              </div>
      </li>
      <li class="items even">
       <div class="infoWrap"> 
        <div class="cartSection info">
             
        <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
          <p class="itemNumber">#QUE-007544-002</p>
          <h3>Item Name 1</h3>
        
          <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>
        
          <p class="stockStatus"> In Stock</p>
          
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p>$15.00</p>
        </div>
    
            <div class="cartSection removeWrap">
           <a href="#" class="remove">x</a>
        </div>
         </div>
         <div class="special"><div class="specialContent">Free gift with purchase!, gift wrap, etc!!</div></div>
      </li>
      
      
      <!--<li class="items even">Item 2</li>-->
 
    </ul>
  </div>
  
  <div class="promoCode"><label for="promo">Have A Promo Code?</label><input type="text" name="promo" placholder="Enter Code" />
  <a href="#" class="btn"></a></div>
  
  <div class="subtotal cf">
    <ul>
      <li class="totalRow"><span class="label">Subtotal</span><span class="value">$35.00</span></li>
      
          <li class="totalRow"><span class="label">Shipping</span><span class="value">$5.00</span></li>
      
            <li class="totalRow"><span class="label">Tax</span><span class="value">$4.00</span></li>
            <li class="totalRow final"><span class="label">Total</span><span class="value">$44.00</span></li>
      <li class="totalRow"><a href="#" class="btn continue">Checkout</a></li>
    </ul>
  </div>
</div>



    @include('partials.might-like')


@endsection
<!-- <script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
<!-- <script >// Remove Items From Cart
$('a.remove').click(function () {
  event.preventDefault();
  $(this).parent().parent().parent().hide(400);

});

// Just for testing, show all items
$('a.btn.continue').click(function () {
  $('li.items').show(400);
});
//# sourceURL=pen.js
</script> -->