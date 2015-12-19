@extends('layout')

@section('content')
  <h1>Patients</h1>

  @foreach($patients as $patient)
    <article>
      <h2>
        <a href="#">
          {{ $patient->name }}
        </a>
      </h2>
    </article>

    <div>
      DOB: {{ $patient->date_of_birth }} </br>
      Age: {{ $patient->age }} </br>
      Address: {{ $patient->address }} </br>
      Phone Number: {{ $patient->phone_number }} </br>
    </div>

  @endforeach
@stop
