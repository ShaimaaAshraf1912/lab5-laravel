
@extends('site_layouts.app')

@section('content')

    <form action="/posts" method="POST">
        @csrf

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">title</label>
    <input type="text" class="form-control"  value="{{ old('title') }}" id="exampleInputEmail1" aria-describedby="emailHelp" name="title"  >

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">description</label>
    <input type="text" class="form-control"   id="exampleInputEmail1" aria-describedby="emailHelp" name="description">

  </div>

  <button type="submit"   class="btn btn-primary"> Add </button>
  @include('shared.errors')
</form>
@endsection
