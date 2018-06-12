<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcription_hys extends Model
{
  protected $fillable = [
      'email','sub_id','unit', 'status','amount'
  ];
}
