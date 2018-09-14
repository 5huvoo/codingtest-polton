
<!DOCTYPE html>
<html>
 <head>
  <title>Ajax Dynamic Dependent Dropdown in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
 	<h1> Dynamic Page </h1>
  <br />


<div class="container box">
   <h3 align="center">Select Your product and know the price</h3><br />
   <div class="form-group">
    <select name="product" id="product" class="form-control input-lg dynamic" data-dependent="price">
     <option value="">Select  your product</option>
     @foreach($product_list as $product)
     <option value="{{ $product->product_name}}"> {{ $product->product_name}} </option>
     @endforeach 
    </select>
   </div>
   <br />
  
  <h1> Product price</h1>
<div class="form-group">
    <select name="price" id="price" class="form-control input-lg dynamic" >
     {{ $data->data}}
    </select>
   </div>
   <br />



  
   {{ csrf_field() }}
   <br />
   <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('dynamic.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#product').change(function(){
  $('#price').val('');
  
 });

 
 

});
</script>

