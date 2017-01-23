<!--- Booking information --->
<div class="panel panel-default">
    <div class="panel-heading">Booking Information</div>
    <div class="panel-body">
        <!--- Flight_no Field --->
        <div class="form-group">
            {!! Form::label('flight_no', 'Flight_no:') !!}
            {!! Form::text('flight_no', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('date', 'Date:') !!}
            {!! Form::date('date', \Carbon\Carbon::now()) !!}
        </div>
        <div class="form-group">
            {!! Form::label('std', 'Scheduled Time of Departure:') !!}
            {!! Form::time('std', \Carbon\Carbon::now()) !!}
        </div>
        <div class="form-group">
            {!! Form::label('sta', 'Scheduled Time of Arrival:') !!}
            {!! Form::time('sta', \Carbon\Carbon::now()) !!}
        </div>
        <!--- From Field --->
        <div class="form-group">
            {!! Form::label('from', 'From:') !!}
            {!! Form::text('from', null, ['class' => 'form-control']) !!}
        </div>
        <!--- To Field --->
        <div class="form-group">
            {!! Form::label('to', 'To:') !!}
            {!! Form::text('to', null, ['class' => 'form-control']) !!}
        </div>
        <!--- Via Field --->
        <div class="form-group">
            {!! Form::label('via', 'Via:') !!}
            {!! Form::text('via', null, ['class' => 'form-control']) !!}
        </div>
        <!--- Class Field --->
        <div class="form-group">
            {!! Form::label('class', 'Class:') !!}
            {!! Form::text('class', null, ['class' => 'form-control']) !!}
        </div>

    </div>
</div>

<!--- Boarding information --->
<div class="panel panel-default">
    <div class="panel-heading">Boarding Information</div>
    <div class="panel-body">
        <!--- Seat Field --->
        <div class="form-group">
            {!! Form::label('seat', 'Seat:') !!}
            {!! Form::text('seat', null, ['class' => 'form-control']) !!}
        </div>
        <!--- Bn Field --->
        <div class="form-group">
            {!! Form::label('bn', 'Boarding No.:') !!}
            {!! Form::number('bn', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!--- Flying information --->
<div class="panel panel-default">
    <div class="panel-heading">Boarding Information</div>
    <div class="panel-body">
        <div class="form-group">
            {!! Form::label('atd', 'Actual Time of Departure:') !!}
            {!! Form::time('atd', \Carbon\Carbon::now()) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ata', 'Actual Time of Arrival:') !!}
            {!! Form::time('ata', \Carbon\Carbon::now()) !!}
        </div>
        <div class="form-group">
            {!! Form::label('reg', 'Reg No.:') !!}
            {!! Form::text('reg', null, ['class' => 'form-control']) !!}
        </div>
        <!--- Departure_runway Field --->
        <div class="form-group">
            {!! Form::label('departure_runway', 'Departure runway:') !!}
            {!! Form::text('departure_runway', null, ['class' => 'form-control']) !!}
        </div>
        <!--- Arrival_runway Field --->
        <div class="form-group">
            {!! Form::label('arrival_runway', 'Arrival runway:') !!}
            {!! Form::text('arrival_runway', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
