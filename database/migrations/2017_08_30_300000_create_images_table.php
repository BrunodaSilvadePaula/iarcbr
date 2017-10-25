<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
  public function up()
  {
    Schema::create('image', function(Blueprint $table){
      $table->increments('id');
      $table->string('image')->nullable();
      $table->string('html_hash');
    });
  }

  public function down()
  {
    Schema::dropIfExists('image');
  }
}
