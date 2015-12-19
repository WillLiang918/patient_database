@extends('layout')

@section('content')

  <h1>{{ $patient->name }}</h1>
  
    <div>
      DOB: {{ $patient->date_of_birth }} </br>
      Age: {{ $patient->age }} </br>
      Address: {{ $patient->address }} </br>
      Phone Number: {{ $patient->phone_number }} </br>
    </div>

@stop
