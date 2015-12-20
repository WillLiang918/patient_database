<?php

namespace App\Http\Controllers;

use \App\Patient;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PatientsController extends Controller
{
  public function index()
  {
    $patients = Patient::all();

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
    
  }
}
