<!DOCTYPE html>
<html>
<head>
	<title>result</title>
</head>
<body>
		<!-- <h1>  My task </h1> -->

		@foreach($tasks as $task)
		<br/>{{ $task->title }}
		<br/>{{ $task->id }}	
		<a href="{{URL('delete')}}/{{$task->id}}">Delete</a>
		<a href="{{URL('update')}}/{{$task->id}}">Update</a>
		@endforeach 
</body>
</html>

