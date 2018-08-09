<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
  protected $fillable = [
      'provider_email','seeker_mail', 'booking_id', 'examination','file_1','comment'
  ];
}
