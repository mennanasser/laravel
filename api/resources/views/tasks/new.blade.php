	<!DOCTYPE html>
	<html>
	<head>
		<title>new task</title>
	</head>
	<body>
	
		<h1>add Ur task</h1>
        <form method="post" action="{{URL('tasks')}}" >
		<input name="myInp" value="" type="text"/>
		<input name="btn" value="Submit" type="submit"/>
		<input type="hidden" name="_token" value="{{ csrf_token()}}">

	</body>
	</html>

	