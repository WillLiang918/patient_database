@extends('layout')

@section('content')

  <a class="btn btn-link" href="{{ url('/patients/create') }}">Add a New Patient</a>
  
  @foreach($patients as $patient)
    <article>
      <h3>
        <a href="{{ url('/patients', $patient->id) }}">
          {{ $patient->name }}
        </a>
      </h3>
    </article>

    <div>
      DOB: {{ $patient->date_of_birth }} </br>
      Age: {{ $patient->age }} </br>
    </div>

  @endforeach
@stop
