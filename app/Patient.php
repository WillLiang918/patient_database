<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  protected $fillable = [
    'name',
    'address',
    'phone_number',
    'date_of_birth',
    'age'
  ];
}
