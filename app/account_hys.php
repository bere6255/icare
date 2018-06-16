<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account_hys extends Model
{
  protected $fillable = [
      'email','job_id', 'amount', 'transaction_ID','status'
  ];
}
