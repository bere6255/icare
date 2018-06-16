<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
  protected $fillable = [
      'email','users_id', 'aver_balance', 'poten_balance'
  ];
}
