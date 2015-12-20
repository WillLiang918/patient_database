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
    $this->middleware('auth', ['only' => 'create']);
  }

  public function index()
  {
    $patients = Patient::latest()->get();

    return view('patients.index', compact('patients'));
  }

  public function show($id)
  {
    $patient = Patient::findorfail($id);

    return view('patients.show', compact('patient'));
  }

  public function create()
  {
    return view('patients.create');
  }

  public function store(PatientRequest $request)
  {
    $patient = new Patient($request->all());

    \Auth::user()->patients()->save($patient);

    return redirect('patients');
  }

  public function edit($id)
  {
    $patient = Patient::findorfail($id);

    return view('patients.edit', compact('patient'));
  }

  public function update($id, PatientRequest $request)
  {
    $patient = Patient::findorfail($id);

    $patient->update($request->all());

    return redirect('patients');
  }
}
