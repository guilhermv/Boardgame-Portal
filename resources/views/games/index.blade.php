@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Games</div>

                <div class="card-body">
                    <hr>
                    @foreach ($games as $game)
                        <article>
                            <h4>{{$game->title}}</h4>
                            <div class="body">{{$game->description}}</div>
                        </article>

                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
