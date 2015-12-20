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
    'age',
    'user_id'
  ];

  //  A patient is assign one doctor

  public function doctor()
  {
    return $this->belongsTo('App\User', 'user_id', 'id');
  }
}
