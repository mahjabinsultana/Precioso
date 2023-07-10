<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<base href="/public">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Precioso</title>
	<link rel="stylesheet" href="{{url('frontend/style.css')}}">
	<script src="https://use.fontawesome.com/6066a1474c.js"></script>
</head>
<body>
	<div class="container">
		<div class="navbar">
		 	<div class="logo">
				<img src="{{url('frontend/images/logo.png')}}" width="155px" >
			
			</div>
			@if (Auth::check())

			     <?php $user = auth()->user()->username; ?>
				 <div>
					<h2 class="admin">Hello, {{$user}}</h2>
				</div> 
				  <nav>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('/products')}}">Products</a></li>
						<li><a href="{{url('/orders')}}">Orders</a></li>
						<li><a href="{{url('/cart')}}">Cart</a></li>
						<li><a href="{{url('/logout')}}">LogOut</a></li>
					</ul>
				</nav>
			@else
				  <nav>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('/products')}}">Products</a></li>
						<li><a href="{{url('/about')}}">About</a></li>
						<li><a href="{{url('/login')}}">LogIn</a></li>
						<li><a href="{{url('/cart')}}">Cart</a></li>
					</ul>
				</nav>
			@endif
			
		</div>
	</div>