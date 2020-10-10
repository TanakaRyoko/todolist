@extends('layouts.app')


@section('content')
<h1>Edit Todo</h1>
<form method="post" action="/todo/{{ $todo->id }}">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" value="{{ $todo->title }}">
        <label for="content">Content</label>
        <input type="text" class="form-control"name="content" id="content" placeholder="Enter Content" value="{{ $todo->content }}">
      </div>
      <div class="form-group">
        <label for="title">due</label>
        <input type="text" class="form-control" name="due" id="due" placeholder="Enter Due" value="{{ $todo->due }}">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

