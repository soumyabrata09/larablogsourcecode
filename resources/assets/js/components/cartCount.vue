<template>

<li>
    <a href="{{ route('cart.index') }}">Cart
        <span class="cart-count">
            @if( Cart:: instance('default')->count() > 0 )
                <span>{{Cart::instance('default')->count()}}</span>
                </span>
            @endif
    </a> 
</li>
</template>

<<script>
export default {
    mounted(){
        console.log('CartCount Component mounted successfully');
    }
}
</script>>