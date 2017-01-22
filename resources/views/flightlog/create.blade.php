@extends('app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Booking Information</div>
            <div class="panel-body">
                <!--- Flight_no Field --->
                <div class="form-group">
                    {!! Form::label('flight_no', 'Flight_no:') !!}
                    {!! Form::text('flight_no', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Boarding Information</div>
            <div class="panel-body">
                <!--- Seat Field --->
                <div class="form-group">
                    {!! Form::label('seat', 'Seat:') !!}
                    {!! Form::text('seat', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
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