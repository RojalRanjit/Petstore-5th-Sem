@extends('layout.adminLayout')
@section('content')
  <div class="container" style="position: absolute;top: 115px;left: 310px;">
    <div class="row">
        
      <div class="col-md-8">
        <form action="{{route('edited')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input name="id" value="{{$edit->id}}" type="hidden">
          <div class="mb-3">
            <label for="item" class="form-label">Item</label>
            <input type="text" class="form-control @error('item') is-invalid @enderror" value="{{$edit->item}}" name="item">
            @error('item')
              <span style="font-size:16px;color:red">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" value="{{$edit->Price}}" class="form-control @error('price') is-invalid @enderror" name="price">
            @error('price')
              <span style="font-size:16px;color:red">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="toys" class="form-label">Type</label>
            <input type="text" value="{{$edit->type}}" class="form-control @error('type') is-invalid @enderror" name="type">
            @error('type')
              <span style="font-size:16px;color:red">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Pet Food</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
            @error('image')
              <span style="font-size:16px;color:red">{{$message}}</span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection