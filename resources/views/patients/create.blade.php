@extends('layout')

@section('content')
  <h1>Add a New Patient</h1>

  <hr/>

  {!! Form::open(['url' => 'patients']) !!}
    <div class="form-group">
      {!! Form::label('name', 'Name:') !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('address', 'Address:') !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('phone_number', 'Phone Number:') !!}
      {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('date_of_birth', 'Date of Birth:') !!} <br/>
      {!! Form::selectMonth('month') !!}
      {!! Form::selectRange('day', 1, 31) !!}
      {!! Form::selectRange('year', 2015, 1900) !!}
    </div>

    <div class="form-group">
      {!! Form::label('age', 'Age:') !!} <br>
      {!! Form::selectRange('age', 1, 105) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Add Patient', ['class' => 'btn btn-primary form-control']) !!}
    </div>

  {!! Form::close() !!}
@stop
