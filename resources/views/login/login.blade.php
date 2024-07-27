@extends('layouts.main')

@section('container')
<body class="text-center">
  <div class="row justify-content-center">
  <div class="col-md-6">
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form action="/login" method="post">
      @csrf
      <h1 class="h3 mb-3 font-weight-normal">Please log in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control @error('name') is-invalid @enderror" placeholder="Email address?" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password?" required>
      <div class="mb-3">
        <label>
          <small>Not registered?<a href="/register"> Register Now!</a></small>
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
    </form>
  </div>
  </div>
  </body>
@endsection