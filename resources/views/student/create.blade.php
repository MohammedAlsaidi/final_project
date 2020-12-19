@extends('layouts.app')

@section('content')

<div class="container">
  <h2>student Information</h2>
  <form  method ="POST" action="{{route('student.store')}}" class="form-horizontal"  enctype="multipart/form-data">>
  @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" >Name </label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >identity </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="identity" name="identity">
      </div>
    </div>
    <div class="form-group">        
    <label class="control-label col-sm-2" >birthday </label>
      <div class="col-sm-10">
      <input type="date" class="form-control"  name="birthday">
        </div>
      </div>
      <div class="form-group">        
    <label class="control-label col-sm-2" >photo </label>
      <div class="col-sm-10">
      <input type="file" class="form-control"  name="photo">
      </div>
      <div class="form-actions right">
  <br>
      <button type="submit" class="btn btn-outline-success">
        <i class="icon-check2"></i> Save </button>

      <td>  
      <a href="{{route('student.show')}}"class="btn btn-outline-warning">  show  </a>  
      </td>
                            
                        
       
    </div>
   
    



@endsection
