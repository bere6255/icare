<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livechat extends Model
{
  protected $fillable = [
      'user', 'chat_id'
  ];
}
