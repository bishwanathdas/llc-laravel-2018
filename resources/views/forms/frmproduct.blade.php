@extends('layouts.frontend')

@section('content')

<form action="ProductInsert" method="POST">
	
<div> <h1 align="center"> Product  Information </h1> </div>

<div align="center">
	
	<label for="productid">Product ID:</label>
	<input type="text" name="productid"  id="productid">

	<label for="productname">Product Name:</label>
	<input type="text" name="productname"  id="productname">

  <input type="hidden" name="_token" value=" {{csrf_token()}} "> 

	<input type="submit" name="submit"  id="submit">	



</div>

</form>

<div align="center">

{{ var_dump($_POST) }}
  

</div>


@endsection




<!-- @section('content')


<form action="product" method="POST">

<div align="center"><h1>Product Information</h1></div>
  
  <div class="form-group" align="center">
  <label for="Productid">Product ID:</label>
  <input type="text" name="Productid"  id="Productid"><br/>

  <label for="productname">Product Name:</label>
  <input type="text" name="productname"  id="productname"><br/>

  <label for="productprice">ProductPrice</label>
  <input type="text" name="productprice"  id="productprice"><br/>
   
   <input type="hidden" name="_token" value=" {{csrf_token()}} "> 

  <input type="submit" name="submit"  id="submit">

</div>

</form>



@endsection -->