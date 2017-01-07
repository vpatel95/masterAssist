<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>

		@include('login.includes.metastyles')

	</head>
	<body>
		<main>
			@yield('content')
		</main>

		@include('login.includes.scripts')
	</body>
</html>