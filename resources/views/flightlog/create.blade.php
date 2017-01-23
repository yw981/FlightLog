@extends('app')
@section('content')
    <div class="container">

          <div class="row">
            <div class="col-md-8 col-md-offset-2" role="main">
                {!! Form::open(['url'=>'flightlog']) !!}
                    @include('flightlog.form')
                    <div>
                        {!! Form::submit('Submit',['class'=>'btn btn-primary pull-right']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
          </div>


    </div>
@stop