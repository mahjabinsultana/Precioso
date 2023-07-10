@extends('frontend.layouts.main')
@section('main-container')

	<div class="row">
		<div class="col-2">
			<h1 style="font-style: italic">A demo e-commerce<br>website.</h1>
			<p style="font-size: 20px"><br>The pictures and description<br>of each product is 
				taken from <br>different online pottery shops.
				</p>
		</div>
		<div class="col-2">
			<img src="{{url('frontend/images/img2.jpg')}}">
		</div>
	</div>

	</div>
	
	

</body>
</html>
@endsection