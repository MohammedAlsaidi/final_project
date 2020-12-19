
@extends('layouts.app')

@section('content')

<table class="table" style="margin: 30px;">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">identity</th>
      <th scope="col">photo</th>
      <th scope="col">birthday</th>
      
      
     
    </tr>
  </thead>
  <tbody>
     @foreach($students as $student)
    <tr>
      <td> {{$student->id}}       </td>
      <td> {{$student->name}}     </td>
      <td> {{$student->identity}} </td>
      <td> {{$student->photo}}    </td>
      <td> {{$student->birthday}} </td>
      
      <td>  
      <a href="{{route('student.edit',$student->id)}}"class="btn btn-outline-success"> Edit </a>    
      
      <a href="{{route('student.destroy',$student->id)}}"class="btn btn-outline-danger"> Delete </a>   
      </td>
   
    </tr>
    @endforeach
  </tbody>

</table>
@endsection