<form action="/student" method="post">
	{{csrf_field()}}
	<input type="text" name="name"/>
	<input type="text" name="price"/>
	<input type="text" name="city"/>
	<input type="submit" value="Register"/>
</form>