<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>binaryoo</title>
		
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="/css/linea.css" >
		<link rel="stylesheet" type="text/css" href="/css/ionicons.min.css" >
		<link rel="stylesheet" type="text/css" href="/css/owl.carousel.css" >
		<link rel="stylesheet" type="text/css" href="/css/magnific-popup.css" >
		<link rel="stylesheet" type="text/css" href="/css/style.css" >

	</head>
	<body>
		@yield('content')
		<script type="text/javascript" src="/js/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery.shuffle.min.js"></script>
		<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="/js/validator.min.js"></script>
		<script type="text/javascript" src="/js/script.js"></script>
		@section('script')
		@show
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115949084-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-115949084-1');
		</script>
	</body>
</html>