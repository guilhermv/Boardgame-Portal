@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$game->title}}:</div>
                <div class="card-body">
                    {{$game->description}}
                </div>
                <hr>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($game->reviews as $review)
                <div class="card">
                    <div class="card-header">
                        {{$review->owner->name}} disse: {{$review->created_at->diffForHumans()}}...
                    </div>
                    <div class="card-body">
                        {{$review->body}}
                    </div>
                    <div class="card-footer">
                        Nota: {{$review->rank}}
                    </div>
                    <hr>
                </div>
            @endforeach         
        </div>
    </div>
    
</div>
@endsection