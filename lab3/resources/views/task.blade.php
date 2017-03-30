<html>
	<body>
	<h1>add Ur task</h1>
        <form method="post" action="/myResult" novalidate>
		<input name="myInp" value="" type="text"/>
		<input name="btn" value="Submit" type="submit"/>
		<input type="hidden" name="_token" value="{{ csrf_token()}}">

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		</form>
	</body>
</html>

<!-- {{ csrf_field()}} -->