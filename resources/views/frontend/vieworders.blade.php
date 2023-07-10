
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
            <div>
				<h2 class="admin">Admin's Panel</h2>
			</div>
				  <nav>
					<ul>
						<li><a href="{{url('/addproducts')}}">Add</a></li>
						<li><a href="{{url('/viewproducts')}}">Products</a></li>
                        <li><a href="{{url('/vieworders')}}">Orders</a></li>
						<li><a href="{{url('/logout')}}">LogOut</a></li>
					</ul>
				</nav>
			
			
		</div>
	</div>

    <div class="small-container cart-page">
        <table>
            <tr>
                <th>User Info</th>
                <th>Product Info</th>
                <th>Payment Status</th>
                <th>Delivery Status</th>
                <th>Action</th>
                
            </tr>

            @foreach ($orders as $order )
                <tr>
                    <td>
                        <div class="cart-info">
                            <div>
                                <p>{{$order->name}}</p>
                                <small>User id : {{$order->user_id}}</small>
                                <br>
                                <small>User email : {{$order->email}}</small>                               
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="cart-info">
                            <img src="product/{{$order->image}}">
                            <div>
                                <p>{{$order->product_title}}</p>
                                <small>Price : ${{$order->price}}</small>
                                <br>                               
                            </div>
                        </div>
                    </td>
                    
                    <td>{{$order->payment_status}}</td>
                    
                    <td>{{$order->delivery_status}}</td>
                    <td><a href="{{url('removeorder', $order->id)}} " style="font-size: 15px">Completed</a></td>
                </tr>               
            @endforeach

        </table>

        <div class="row">
			<div class="page-btn">
				{!! $orders->links() !!}
			</div>
			
		</div>
    </div>


</body>
</html>
