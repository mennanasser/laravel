<!DOCTYPE html>
<html>
<head>
	<title> index </title>
</head>
<body>
	@foreach($tasks as $task)
		     {{ $task->id }}	
			{{ $task->title }} 
			<br>
		<form action="{{URL('tasks')}}/{{$task->id}}" method="post"> 
		<input type="hidden" name="_method" value="delete">
		{{csrf_field()}}
		<input type="submit" value="Dlete">
		</form>
		
		<a href="{{URL('tasks')}}/{{$task->id}}/edit">Update</a>
		<a href="{{URL('tasks')}}/{{$task->id}}">Show</a>
		<br>
		<br>
	@endforeach 
<br>	<br>
<a href="tasks/create">Add Task</a>
</body>
</html>