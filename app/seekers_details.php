<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seekers_details extends Model
{
  protected $fillable = [
      'email','users_id', 'title', 'gender','first_name','last_name','phone','blood_group','genotype','age','asthmatic','epileptic','operation','allergic','weigh','img'
  ];
}
