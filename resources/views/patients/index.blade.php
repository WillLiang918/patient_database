@extends('layout')

@section('content')

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
      Doctor: {{ $patient->doctor->name }} </br>

    </div>

  @endforeach
@stop
