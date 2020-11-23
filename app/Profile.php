<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  public $table = "profiles";
  public $fillable = [
    'name',
    'bio',
    'contents'
  ];
}
