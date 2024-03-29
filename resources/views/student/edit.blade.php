@extends('master')

@section('content')

<div class="row">
  <div class="col-md-12">
    <br />
    <h3>Pas aan kerel</h3>
    <br />
    @if(count($errors) > 0)

    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    @endif

    <form method="post" action="{{action('StudentController@update', $id)}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="PATCH" />
      <div class="form-group">
        <input type="text" name="name" class="form-control" value="{{$student->name}}" placeholder="Enter your name" />
      </div>
      <div class="form-group">
        <input type="text" name="email" class="form-control" value="{{$student->email}}" placeholder="Enter your email" />
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Edit" />
      </div>
    </form>
    </div>
  </div>
</div>

@endsection
