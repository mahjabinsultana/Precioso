@extends('frontend.layouts.main')
@section('main-container')

	<div class="small-container">
		
		<div class="roww row-2">
			<h2>All Products</h2>
		</div>
 
	    
		<div class="roww">
			@foreach ($products as $product)
			
				<div class="col-4">
					<a href="{{url('/productdetails', $product->id)}}">
						<img src="product/{{$product->image}}">
						<h4>{{$product->title}}</h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
						</div>
						<p>${{$product->price}}</p>
					</a>

				</div>
			
			@endforeach
			
			
			<div class="page-btn">
				{!! $products->links() !!}
			</div>

		</div>
		

		
		
	</div>
	


	

</body>
</html>
@endsection