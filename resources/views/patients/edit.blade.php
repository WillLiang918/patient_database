@extends('layout')

@section('content')
  <h1>Edit: {!! $patient->name !!}</h1>

  {!! Form::model($patient, ['method' => 'PATCH', 'action' => ['PatientsController@update', $patient->id]]) !!}

    @include ('patients.form', ['submitButtonText' => 'Update Patient'])

  {!! Form::close() !!}

  @include ('errors.list')

@stop
