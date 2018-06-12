<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcription extends Model
{
  protected $fillable = [
      'email','unit', 'users_id','sub_type'
  ];
}
