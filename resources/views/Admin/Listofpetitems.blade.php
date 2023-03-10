@extends('layout.adminLayout')
@section('content')
<div class="container" style="position: absolute;top: 115px;left: 150px;">
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Item</th>
      <th scope="col">Price</th>
      <th scope="col">Type</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->item}}</td>
        <td>{{$item->Price}}</td>
        <td>{{$item->type}}</td>
        <td><img style="height:40px;width:40px" src="{{asset( $item->foodimg ) }}" alt="error"></td>
        <td><a href="{{url('delete/' . $item->id)}}" class="btn btn-danger">Delete</a>
        <a href="{{url('edit/' . $item->id)}}" class="btn btn-primary">Edit</a></td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>

@endsection
