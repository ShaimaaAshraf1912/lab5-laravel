
@extends('site_layouts.app')

@section('content')
<a href="/posts/create">Add new post</a>

       <table class="table">
 <thead>
    <tr>

        <th>id</th>
        <th>Name</th>
        <th>title</th>
         <th>description</th>
    </tr>
</thead>
  <tbody>
 @foreach ($posts as $post)
  <tr>

    <td>{{ $post->id }}</td>
    <td>{{ $post->user->name }}</td>
    <td>{{ $post['title'] }}</td>
    <td>{{ $post['description'] }}</td>
    <td> <a href="/posts/{{ $post['id'] }}">show</a></td>
    <td> <a href="/posts/{{ $post['id'] }}/edit">edit</a></td>
   <td>

    <form action="/posts/{{ $post['id'] }}" method="post">

         @csrf
        @method("DELETE")
      <input type="submit" value="delete">
    </form>
</td>
   </tr>


@endforeach
@endsection
