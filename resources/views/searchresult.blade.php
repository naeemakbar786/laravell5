<form action="/search" method="post">
    {{csrf_field()}}
    <input type="text" name="search"/>
    <select name="option">
            <option value="id">Id</option>
            <option value="name">name</option>
            <option value="price">price</option>
            <option value="city">City</option>

    </select>
    <input type="submit" value="search"/>
</form>                
    <table> 
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>City</th>
        </tr>
        
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->price}}</td>
            <td>{{$d->city}}</td>
        </tr>
           