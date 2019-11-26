@extends('master')

@section('content')

<div class="row">
  <div class="col-md-12">
    <br />
    <h3 align="center">Student Data</h3>
    <br />
    @if($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{$message}}</p>
    </div>
    @endif
    <div align="right">
      <a href="{{route('student.create')}}" class="btn btn-primary">Add</a>
      <br />
      <br />
    </div>
    <table class="table table-bordered">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      @foreach($students as $row)
      <tr>
        <td>{{$row['name']}}</td>
        <td>{{$row['email']}}</td>
        <td><a href="{{action('StudentController@edit',
          $row['id'])}}">Edit</a></td>
        <td></td>
      </tr>
      @endforeach
  </div>
</div>

@endsection
