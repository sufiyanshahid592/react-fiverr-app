<html>
	<head>
		<title>Home</title>
		<meta name="csrf-token" content="{{csrf_token()}}">
	</head>
	<body>
		<div id="example"></div>
		<script src="{{url('js/app.js?v='.time())}}"></script>
	</body>
</html>