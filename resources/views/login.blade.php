<!DOCTYPE HTMl>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>

	<div>
		<div>
			<h2>LogIn</h2>
		</div>
		<form action="login" method="Post">
		  @csrf
		<div>
			<input type="text" name="email" placeholder="Email">
		</div>
		<div>
			<input type="text" name="password" placeholder="Password">
		</div>
		<button class="">Submit</button>
		</form>
	</div>
</body>
</html>