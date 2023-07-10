
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
                <th>Product</th>
                <th>Description</th>
                <th>Remove</th>
            </tr>

            @foreach ($products as $product )
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="product/{{$product->image}}">
                            <div>
                                <p>{{$product->title}}</p>
                                <small>Price : ${{$product->price}}</small>
                                <br>                               
                            </div>
                        </div>
                    </td>
                    
                    <td>{{$product->description}}</td>
                    
                    <td><a href="{{url('removeproduct', $product->id)}}">Remove</a></td>
                </tr>               
            @endforeach

        </table>

        <div class="row" style="padding-top: 30px">
			<div class="page-btn">
				{!! $products->links() !!}
			</div>
			
		</div>
    </div>


</body>
</html>
