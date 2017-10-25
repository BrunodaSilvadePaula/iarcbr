<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $table = 'contact';
  protected $dates = ['created_at', 'updated_at'];
}
