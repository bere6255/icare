<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
  protected $fillable = [
      'seeker','provider', 'request_ID', 'name','reason','note','status','seeker_action','provider_action'
  ];
}
