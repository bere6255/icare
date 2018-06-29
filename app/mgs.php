<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mgs extends Model
{
  protected $fillable = [
      'seeker','provider', 'msg_ID', 'title','msg','img1','img2','img3','status','seeker_action','provider_action'
  ];
}
