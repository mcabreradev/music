<!-- resources/views/auth/register.blade.php -->

@extends('index')

@section('content')

<div class="row">
  <div class="col-md-6 col-md-offset-2">
    <div class="well bs-component">
      <form class="form-horizontal" method="POST" action="/auth/register">
        {!! csrf_field() !!}
        <fieldset>
          <legend>Registration </legend>

          <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="inputEmail" placeholder="Name" name="name" value="{{ old('name') }}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{ old('email') }}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" placeholder="Password" name="password" id="password">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Confirm Password</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </div>
        </fieldset>
      </form>
    <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
  </div>

</div>
@endsection
