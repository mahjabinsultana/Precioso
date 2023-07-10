
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

	<div class="row">
		<div class="col-2">
			<div class="product-insert">
				<div class="ddesign1">
					<h1>Add product</h1>
				</div>
				
			    <form action="{{route('admin.post')}}" method="POST" enctype="multipart/form-data">
					
					@csrf

					<div class="ddesign1">
						<label>Product Title : </label>
						<input type="text" name="title" placeholder="Write a title" required="">
					</div>

					<div class="ddesign1">
						<label>Product Description : </label>
						<input type="text" name="description" placeholder="Write description" required="">
					</div>

					<div class="ddesign1">
						<label>Product Price : </label>
						<input type="number" name="price" placeholder="Write a price" required="">
					</div>

					<div class="ddesign1">
						<label>Product Image : </label>
						<input type="file" name="image" placeholder="Upload image" required="">
					</div>

					<div class="ddesign1">
						<input type="submit" value="Add product" class="btn">
					</div>
				</form>

			</div>

		</div>

		<div class="col-2">
			<img src="{{url('frontend/images/img2.jpg')}}">
		</div>
	</div>
		
</body>
</html>