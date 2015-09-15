<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="description" content="@yield('meta-desc')">
</head>
<body>
	
	@yield('content')

	{{-- Section for the footer. We can manipulate it later if we want --}}
	
	@section('footer')
	<footer>
		<p>Some copyrights</p>
	</footer>
	@show

</body>
</html>