<head>
	
</head>


<table border=1 class="table table-striped">
	<tr>
		<th>Name</th>
		<th>Fname</th>
		<th>Address</th>
	<tr>
	


@foreach($abc as $a)
	<tr>	
		<td>{{$a->name}}</td>
		<td>{{$a->fname}}</td>
		<td>{{$a->address}}</td>
	</tr>
@endforeach


</table>
<div class="pagination">
	<?php	echo $abc->render(); ?>
</div>