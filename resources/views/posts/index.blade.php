@extends('layout')

@section('content')
    <h1>Post</h1>
    <div class="row">
      <form>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="search">
          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
        </div>
      </form>
  </div>
          @php
            $no=1;
          @endphp
            @foreach($posts as $post)
            <div class="bg-body-tertiary p-5 rounded">
                <h1>{{ $no++ }}.{{ $post->title }}</h1>
                <p class="lead">Author: {{ $post->author }} {{ $post->created_at }}</p>
                <p class="lead">{{ $post->body }}</p>
                
              </div>
            @endforeach
            <div class="d-flex justify-content-center">
              {{ $posts->links('pagination::bootstrap-5') }}
          </div>
         

@endsection

