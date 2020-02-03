<!DOCTYPE html>
<html>
<head>
	
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
	<title>@yield('title')LARAVEL - 1</title>
	
</head>
<body>
	<header>
		<h1>Header</h1>
	</header>
	<hr>
	<section>
		@yield('content')
	</section>
	<hr>
	<footer>
		<h1>Rodapé</h1>
	</footer>
</body>
</html>