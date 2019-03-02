<form action="/patient" method="post">
	{{csrf_field()}}

	<input type="text" placeholder="Enter your name" name="name"/>
	<input type="text" placeholder="Enter your abba Name" name="fname"/>
	<input type="text" placeholder="Enter your address" name="address"/>
	<input type="submit" value="add"/>
</form>