<?php

namespace App\Http\Controllers;

use \App\Patient;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class PatientsController extends Controller
{
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

  public function store() {

    Patient::create(Request::all());

    return redirect('patients');
  }
}
