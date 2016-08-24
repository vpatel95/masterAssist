@extends('login.layouts.master')

@section('title', 'Welcome to MasterAssist')

@section('content')
<div class="container">
	<div class="row">
		<h3>LOGIN</h3>
		<form action="{{ route('login') }}" method="POST">
			<div class="form-group">
				<input type="email" name="email" placeholder="Email" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Password" class="form-control">
			</div>
			<div>
				<button type="submit" class="btn btn-primary">Log In</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</div>
		</form>
	</div>
	<div class="row">
		<h3>REGISTER</h3>
		<form action="{{ route('register') }}" method="POST">
		<div class="form-group">
			<input type="email" name="email" placeholder="Email" class="form-control">
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Password" class="form-control">
		</div>
		<div class="form-group">
			<input type="password" name="r_password" placeholder="Retype Password" class="form-control">
		</div>
		<div class="form-group">
			<input type="text" name="category" placeholder="Student/teacher" class="form-control">
		</div>
		<div>
			<button type="submit" class="btn btn-primary">Register</button>
			<input type="hidden" name="_token" value="{{ Session::token() }}">
		</div>
	</form>
	</div>

</div>
@endsection