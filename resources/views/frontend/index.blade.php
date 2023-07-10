@extends('frontend.layouts.main')
@section('main-container')

	<div class="row">
		<div class="col-2">
			<h1 style="font-style: italic">From our hands<br>To yours!</h1>
			<p style="font-size: 20px"><br>We mold the earth into art. Each of our<br>piece is made
				with love and care.<br> Our goal is to make your experience
				<br> as beautiful as our creation!</p>
			<a href="{{url('/products')}}" class="btn">Explore Now &#8594;</a>
		</div>
		<div class="col-2">
			<img src="{{url('frontend/images/img2.jpg')}}">
		</div>
	</div>

	</div>
	
	

</body>
</html>
@endsection