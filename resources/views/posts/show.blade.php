@extends('layouts.app') 

@section('content')
<a href="/posts"class="btn btn-default">Retour</a>
<h1>{{$post->title }}</h1>
<p>{{ $post->body }}</p>
<hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
<small>écrit le {{$post->created_at}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Editez</a>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Supprimez', ['class' => 'btn btn-danger']) }}
    {{Form::close()}}
        @endif
    @endif
@endsection