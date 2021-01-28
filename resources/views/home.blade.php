@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/games" class="btn btn-primary">Accédez à nos jeux</a>
                    <a href="/posts/create" class="btn btn-primary">Accédez à nos avis</a>
                        @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <th>{{ $post->title }}</th>
                                <th><a href="/posts/{{ $post->id }}/edit" class="btn btn-default"> edit</a></th>
                                <th></th>
                            </tr>
                            @endforeach
                        </table>
                        @else
                        <p>Vous n'avez donner aucun avis.</p>
                        @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
