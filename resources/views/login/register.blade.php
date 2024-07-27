@extends('layouts.main')

@section('container')
<body class="text-center">
<div class="row justify-content-center">
<div class="col-md-6">
    <form action="/register" method="post">
      @csrf
      <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
      <label for="inputName" class="sr-only">Name</label>
      <input type="text" id="inputName" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name?" required autofocus>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address?" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password?" required>
      <div class="mb-3">
        <label>
          <small>Have account?<a href="/login"> Login Now!</a></small>
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    </form>
    </div>
    </div>
  </body>
@endsection