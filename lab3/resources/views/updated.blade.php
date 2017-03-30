<html>
	<body>
	<h1>add Ur Updated task</h1>

			<!-- {{$task}} -->
        <form method="post" action="">
		<input name="myInp" value="{{$task->title}}" type="text"/>
		<input type="hidden" name="_token" value="{{ csrf_token()}}">
		<input name="btn" value="Update" type="submit"/>
	
		</form>
	</body>
</html>

			<!-- {{csrf_fied()}} -->
