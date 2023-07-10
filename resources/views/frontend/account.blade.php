
@extends('frontend.layouts.main')
@section('main-container')
	@if(session()->has('message'))
			
	<div class="messages">
		{{session()->get('message')}}
	</div>

	@endif
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<div class="form-container">
						<h2>Register</h2>
						<form id="registraionformm" action="{{route('account.post')}}" method="POST">
							@csrf
							<input type="text" placeholder="Username" name="username" required="">
							<input type="email" placeholder="Email" name="email" required="">
							<input type="password" placeholder="Password" name="password" required="">
							<button type="submit" class="btn">Register</button>
							<a href="">Already have an account?</a>
							<a href="{{url('/login')}}">Log in here.</a>
						</form>

					</div>

				</div>
				<div class="col-2">
					<img src="{{url('frontend/images/img3.jpg')}}" width="500px">
				</div>

			</div>
		</div>
		
	</div>

	</div>
	
	
</body>
</html>
@endsection