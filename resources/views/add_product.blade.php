
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
    <h1>Add Product</h1>
    <form method="post" action="/mysite">
                {{csrf_field()}}
            <input type="text" placeholder="Enter Product Name" name="p_name" class="form-control"/>
            <textarea name="p_discription" id="" cols="30" rows="10" class="form-control" placeholder="Product Discription Here"></textarea>
            <input type="number" placeholder="Enter Product Price" name="p_price" class="form-control"/> 
            <button type="submit" class="btn btn-primary" >Submit</button>        
    </form>
</div>