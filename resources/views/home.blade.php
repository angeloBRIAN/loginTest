@extends('layouts.main')

@section('container')
    <h1>Welcome! {{ $name }}</h1>

    <h3>Guest Data</h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($user_data as $item)
    <tr>
      <td>{{ $item['id'] }}</td>
      <td>{{ $item['name'] }}</td>
      <td>{{ $item['email'] }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
