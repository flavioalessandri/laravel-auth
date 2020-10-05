<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable =[
      'title',
      'description',
      'difficulty_level'
    ];

    public function employees(){
      return $this ->belongsToMany(Employee::class);
    }
}
