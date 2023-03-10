@extends('layout.app')
@section('content')

<div class="container shadow p-3 mb-5 mt-5 bg-body rounded" style="width: 500px">
  <h1 style="text-align: center">Sign Up</h1>
    <form class="container flex-column" method="post" action="{{route('registerUser')}}">
      @csrf
     <div class="mb-3">
      <label for="exampleInputName" class="form-label">Name</label>
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputName">
      @error('name')
        <div class="invalid-feedback">
        {{$message}}
        </div>
      @enderror
     </div>
     <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1">
      @error('email')
        <div class="invalid-feedback">
        {{$message}}
        </div>
      @enderror
     </div>
     <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
      @error('password')
        <div class="invalid-feedback">
        {{$message}}
        </div>
      @enderror
     </div>
      <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
</div>
@endsection