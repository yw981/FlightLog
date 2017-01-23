@extends('app')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" alt="64x64" src="{{ $fl->user->avatar }}" style="width: 64px; height: 64px;">
                    </a>
                </div>
                <div class="media-body">
                    @if(Auth::check() && Auth::user()->id == $fl->user_id)
                    <h1>
                        <a class="btn btn-lg btn-primary pull-right" href="{{ url('flightlog/'.$fl->id.'/edit') }}" role="button">Edit this »</a>
                    </h1>
                    @endif
                    <h4 class="media-heading">{{ $fl->flight_no }}</h4>
                    {{ $fl->user->name }}
                </div>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                {{ $fl->flight_no }}
                <div class="blog-post">
                    {{ $fl->date }}
                </div>

            </div>
        </div>
    </div>
@stop