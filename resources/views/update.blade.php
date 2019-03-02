<form action="/student/{{$r->id}}" method="post">
	{{csrf_field()}}
    {{method_field('put')}}
	<input type="text" name="name" value='{{$r->name}}'/>
	<input type="text" name="price" value='{{$r->price}}'/>
	<input type="text" name="city" value='{{$r->city}}'/>
	<input type="submit" value="Update"/>
</form>