
@extends('frontend.layouts.main')
@section('main-container')
    
<!----cart details--->

    
        @if(session()->has('message'))
        
            <div class="messages">
                {{session()->get('message')}}
            </div>
        
        @endif
    
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            
            <?php $totalprice = 0; ?>

            @foreach ($cart as $cart )
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="product/{{$cart->image}}">
                            <div>
                                <p>{{$cart->product_title}}</p>
                                <small>Price : ${{$cart->price}}</small>
                                <br>
                                <a href="{{url('remove_cart', $cart->id)}}">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td>{{$cart->quantity}}</td>
                    <?php $subtotal = ($cart->quantity * $cart->price); ?>
                    <td>${{$subtotal}}</td>
                </tr>
                <?php $totalprice = $totalprice + ($cart->quantity * $cart->price); ?>
            @endforeach
            <tr>
        </table>

        <?php $tax = $totalprice * 0.3;
              $total = $totalprice + $tax;
        ?>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>{{$totalprice}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>{{$tax}}</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>{{$total}}</td>
                </tr>

                <tr>
                    <td><h3 > Proceed to order </h3></td>
                    <td><a href="{{url('cash_order')}}" style="font-size: 15px">Cash On Delivery</a>
                </tr>

            </table>

        </div>

        <div class="total-price">
            
            
        </div>

    </div>


</body>
</html>
@endsection