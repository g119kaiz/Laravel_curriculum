@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
	{{Auth::user()->name}}
	<h1>Blog Name</h1>
	<div>
        @foreach($questions as $question)
            <div>
              <a href="https://teratail.com/questions/{{ $question['id'] }}">
                {{ $question['title'] }}
              </a>
             </div>
        @endforeach
    	</div>
	   <div class='posts'>
		[<a href='/posts/create'>create</a>]
		@foreach ($posts as $post)
		<small>{{ $post->user->name }}</small>
		<div class='post'>
		    <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
		@endforeach
		<div class='paginate'>
			{{ $posts->links() }}
		</div>
	   </div>
    </body>
</html>
@endsection
