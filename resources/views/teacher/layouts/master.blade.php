<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	@include('teacher.includes.metastyles')

</head>
<body>

	<section>
		@include('teacher.includes.sidebar')
	</section>

	<header>
	</header>

	<main>
		@yield('content')
	</main>

</body>
</html>