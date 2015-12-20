@extends('layout')

@section('content')
  <h1>Add a New Patient</h1>

  <hr/>

  {!! Form::open(['url' => 'patients']) !!}

    @include ('patients.form', ['submitButtonText' => 'Add Patient'] )

  {!! Form::close() !!}

  @include ('errors.list')

@stop
