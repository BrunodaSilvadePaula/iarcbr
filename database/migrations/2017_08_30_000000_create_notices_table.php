<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
  public function up()
  {
    Schema::create('notice', function(Blueprint $table){
      $table->increments('id');
      $table->string('title');
      $table->string('sub_title')->nullable();
      $table->longText('description')->nullable();
      $table->longText('description_short')->nullable();
      $table->string('image')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('notice');
  }
}
