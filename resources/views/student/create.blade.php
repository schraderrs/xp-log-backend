@extends('master')

@section('content')

<div class="row">
  <div class="col-md-12">
    <br/>
    <h3 aling="center">Add Data</h3>
    <br/>
    @if (count($errors) > 0)
    <div class='alert alert-danger'>
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-success">
      <p>{{\Session::get('success')}}</p>
    </div>
    @endif

    <form method="post" action="{{url('student')}}">
      {{csrf_field()}}
      <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Enter First Name & Last Name" />
      </div>
      <div class="form-group">
        <input type="text" name="password" class="form-control" placeholder="Enter Password" />
      </div>
      <div class="form-group">
        <input type="text" name="biography" class="form-control" placeholder="Tell us a bit about yourself" />
      </div>
      <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="Enter Email" />
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" />
      </div>
      </form>
  </div>
</div>

@endsection
