@extends('layouts.app')
@section('content')
<div class="container">
@if($errors-> any())

  @foreach($errors->all() as $error)
  <div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Oh snap!</strong> {{ $error  }}

  </div>
  @endforeach
@endif

  <div class="panel panel-default">
     <div class="panel-heading">
        <h3 class="panel-title">Add New Student Data</h3>
     </div>
     <div class="panel-body">
       <form class="form-horizontal" action="{{ route('store') }}" method="POST">
 {{ csrf_field() }}
       <fieldset>

         <div class="form-group">
           <label for="roll" class="col-md-2 control-label">Roll</label>

           <div class="col-md-10">
             <input type="text" class="form-control" name="roll" placeholder="Roll">
           </div>
         </div>


         <div class="form-group">
           <label for="average" class="col-md-2 control-label">Average</label>

           <div class="col-md-10">
             <input type="text" class="form-control" name="average" placeholder="Average">
           </div>
         </div>


         
       


         <div class="form-group">
           <div class="col-md-10 col-md-offset-2">
             <button type="button" class="btn btn-default">Cancel</button>
             <button type="submit" class="btn btn-primary">Submit</button>
           </div>
         </div>
       </fieldset>
     </form>


     </div>
  </div>
</div>
@endsection
