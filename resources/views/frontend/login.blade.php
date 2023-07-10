
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
						<h2>Login</h2>
						<form id="loginformm" action="{{route('login.post')}}" method="POST">
							@csrf
							<input type="text" placeholder="Username" name="username" required="">
							<input type="password" placeholder="Password" name="password" required="">
							<button type="submit" class="btn">LOGIN</button>
							<a href="">Forgot password?</a>
							<a href="{{url('/account')}}">Create new account</a>
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