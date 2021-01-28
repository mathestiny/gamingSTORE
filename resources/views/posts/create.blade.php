@extends('layouts.app') 

@section('content')
    <h1>Donnez nous votre avis!</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Titre') }}
        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'GTA V est un jeu magnifique']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Texte') }}
        {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Votre avis est important soyez honnête']) }}
    </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection