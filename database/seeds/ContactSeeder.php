<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
  public function run(){
    DB::table('contact')->insert([
      'name'    => 'Bruno',
      'email'   => 'bruno.dasilvadepaula@gmail.com',
      'phone'   => '16996236789',
      'message' => 'Cadastro de teste'
    ]);
  }
}
