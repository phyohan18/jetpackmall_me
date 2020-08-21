<html>
<head> 
	<title>Laravel Lesson</title>
</head>	
<body>
	<p> Welcome to Laravel Lesson</p>
	<h1>Detail</h1>

	<label >Name : <?php  echo $name; ?></label> <br>
	<label >Position: {{ $position }} </label><br>
	<label >City: {!! $city !!}</label>

	
</body>

</html>