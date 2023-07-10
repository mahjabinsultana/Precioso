
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Precioso</title>
	<link rel="stylesheet" href="{{url('frontend/style.css')}}">
</head>
<body>

	<div class="container">
		<div class="navbar">
		 	<div class="logo">
				<img src="{{url('frontend/images/logo.png')}}" width="155px" >
			
			</div>
            <?php $user = auth()->user()->username; ?>
				 <div>
					<h2 class="admin">Hello, {{$user}}</h2>
				</div> 
				  <nav>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('/products')}}">Products</a></li>
						<li><a href="{{url('/about')}}">Orders</a></li>
						<li><a href="{{url('/cart')}}">Cart</a></li>
						<li><a href="{{url('/logout')}}">LogOut</a></li>
					</ul>
				</nav>
			
			
		</div>
	</div>

    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Payment Status</th>
                <th>Delivery Status</th>
            </tr>

            @foreach ($orders as $order )
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="product/{{$order->image}}">
                            <div>
                                <p>{{$order->product_title}}</p>
                                <small>Price : ${{$order->price}}</small><br> 
                                <small>Quantity : {{$order->quantity}}</small>
                                                              
                            </div>
                        </div>
                    </td>
                    
                    <td>{{$order->payment_status}}</td>
                    
                    <td>{{$order->delivery_status}}</td>
                </tr>               
            @endforeach

        </table>

        
    </div>


</body>
</html>
