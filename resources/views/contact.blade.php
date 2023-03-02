@extends('layout.app')
@section('content')

              
<div class="container shadow p-3 mb-5 mt-5 bg-body rounded" style="width: 500px">
                @if(session()->has('message'))
                <div class="alert alert-success" style="text-align: center">
                    {{session()->get('message')}}
                    <button type="button" class="close" data-dismiss="alert">X</button>
                </div>
                @endif
    <h1 style="text-align: center">Contact Us</h1>
    <form class="container flex-column" action="{{route('message')}}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name: </label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Email: </label>
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
      @error('email')
        <div class="invalid-feedback">
        {{$message}}
        </div>
      @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Message: </label>
        <textarea name="message" cols="25" rows="5" class="form-control" placeholder="Enter your message here"> </textarea>
    </div>
    <button type="submit" class="btn btn-primary form-control">Submit</button>
    </form>
</div>
@endsection