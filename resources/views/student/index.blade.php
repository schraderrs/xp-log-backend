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
        <td>
          <form method="post" class="delete_form" action="{{action('StudentController@destroy', $row['id'])}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE" />
            <button type="symbit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
  </div>
</div>
<script)
$(document).ready(function(){
  $('.delete_form').on('submit', function(){
    if(confirm('Weet je het zeker kerel?'))
    {
      return true;
    }
    else
    {
      return false;
    }
  });
});
</script>

@endsection
