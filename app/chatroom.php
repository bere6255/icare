<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chatroom extends Model
{
  protected $fillable = [
      'sender','reciever', 'chat_ID','msg'
  ];
}
