<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">



<table border=1 class="table table-striped">
    <tr>
       <th>Id</th>
       <th>Name</th>
       <th>Department</th>
        <th>City</th>
    </tr>    

@foreach($data as $d)
   <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->name}}</td>
        <td>{{$d->department}}</td>
        <td>{{$d->city}}</td>
    </tr>    
@endforeach