<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class providers extends Model
{
  protected $fillable = [
      'email','users_id', 'title', 'specialty','first_name','last_name','phone','address','mdcn','country','state','about','verification','activation','img','mdcn_file'
  ];
}
