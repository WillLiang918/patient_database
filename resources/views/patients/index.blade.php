@extends('layout')

@section('content')
  <h1>Patients</h1>

  @foreach($patients as $patient)
    <article>
      <h2>
        <a href="{{ url('/patients', $patient->id) }}">
          {{ $patient->name }}
        </a>
      </h2>
    </article>

    <div>
      DOB: {{ $patient->date_of_birth }} </br>
      Age: {{ $patient->age }} </br>
    </div>

  @endforeach
@stop
