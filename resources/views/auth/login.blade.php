<!-- resources/views/auth/login.blade.php -->
@extends('index')

@section('content')

<div class="row">
  <div class="col-md-6 col-md-offset-2">
    <div class="well bs-component">
      <form class="form-horizontal" method="POST" action="/auth/login">
        {!! csrf_field() !!}
        <fieldset>
          <legend>Login</legend>
          <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{ old('email') }}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Clave</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" placeholder="Password" name="password" id="password">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Recordar
                </label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
          </div>
        </fieldset>
      </form>
    <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
  </div>

</div>

@endsection
