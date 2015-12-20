<?php

namespace App\Http\Controllers;

use \App\Patient;
use App\Http\Requests;
use App\Http\Requests\PatientRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
use App\Http\Middleware;

class PatientsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $patients = Patient::latest()->get();

    return view('patients.index', compact('patients'));
  }

  public function show(Patient $patient)
  {
    return view('patients.show', compact('patient'));
  }

  public function create()
  {
    return view('patients.create');
  }

  public function store(PatientRequest $request)
  {
    \Auth::user()->patients()->create($request->all());

    flash()->success($request->name . ' has been added to the database.')->important();

    return redirect('patients');
  }

  public function edit(Patient $patient)
  {
    return view('patients.edit', compact('patient'));
  }

  public function update(Patient $patient, PatientRequest $request)
  {
    flash()->success($patient->name . "'s information has been updated.")->important();

    $patient->update($request->all());

    return redirect('patients');
  }
}
