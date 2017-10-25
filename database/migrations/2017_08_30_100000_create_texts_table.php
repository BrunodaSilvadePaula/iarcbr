<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextsTable extends Migration
{
  public function up()
  {
    Schema::create('text', function (Blueprint $table){
      $table->increments('id');
      $table->string('form_name');
      $table->string('html_hash');
      $table->string('value')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('text');
  }
}
