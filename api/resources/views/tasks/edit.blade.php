	<!DOCTYPE html>
	<html>
	<head>
		<title>new task</title>
	</head>
	<body>
	
		<h1>add Ur task</h1>
        <form method="post" action="{{URL('tasks')}}/{{$task->id}}" > 
        <input type="hidden" name="_method" value="PUT">
		<input name="myInp" value="{{$task->title}}" type="text"/>
		<input name="btn" value="Edit" type="submit"/>
		<input type="hidden" name="_token" value="{{ csrf_token()}}">

	</body>
	</html>

	