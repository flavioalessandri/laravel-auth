<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=[

      'location_id',
      'name',
      'lastname',
      'personal_code',
      'date_of_birth'

    ];

    public function location(){
      return $this ->belongsTo(Location::class);
    }

    public function tasks(){
      return $this ->belongsToMany(Task::class);
    }
}
