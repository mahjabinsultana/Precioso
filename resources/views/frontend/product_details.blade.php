@extends('frontend.layouts.main')
@section('main-container')

    <!-----single product details------->
	@if(session()->has('message'))
        
            <div class="messages">
                {{session()->get('message')}}
            </div>
        
        @endif
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <h1>{{$product->title}}</h1>
                <h4>${{$product->price}}</h4>
				<form action="{{url('/cart', $product->id)}}" method="POST">
					@csrf
					<input type="number" value="1" min="1" name="quantity">
					<button type="submit" class="btn">Add to cart</button>
				</form>
				 <h3>Product Details</h3>
                <p>{{$product->description}}</p>
            </div>
            <div class="col-2">
				<img src="product/{{$product->image}}" width="100%" >
               <!---- <img src="{{url('frontend/images\product1.png')}}" >----->
            </div>
            
        </div>
    </div>


    <div class="small-container">
        <div class="row row-2">
            <h2>Similar Products</h2>
            <a href="{{url('/products')}}">View more</a>
        </div>
    </div>


	<div class="small-container">
		<div class="roww">
			@foreach ($similar as $similarproduct)
			
				<div class="col-4">
					<a href="{{url('/productdetails', $similarproduct->id)}}">
						<img src="product/{{$similarproduct->image}}">
						<h4>{{$similarproduct->title}}</h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
						</div>
						<p>{{$similarproduct->price}}$</p>
					</a>

				</div>
			
			@endforeach

		</div>
	</div>

</body>
</html>
@endsection