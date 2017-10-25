<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
  protected $table = 'text';
  protected $dates = ['created_at', 'updated_at'];
}
