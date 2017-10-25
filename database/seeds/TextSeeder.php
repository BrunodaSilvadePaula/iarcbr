<?php

use Illuminate\Database\Seeder;

class TextSeeder extends Seeder
{
  public function run(){
    DB::table('text')->insert([
      'form_name' => 'breve_descricao',
      'html_hash' => 'desc_top',
      'value'     => 'adjhgsadhjsagdjasgdjas'
    ]);
    DB::table('text')->insert([
      'form_name' => 'quem_somos',
      'html_hash' => 'quem_somos',
      'value'     => 'iarcbr ajsdgajgdajdgasdhaj'
    ]);
    DB::table('text')->insert([
      'form_name' => 'service_1',
      'html_hash' => 'service_1',
      'value'     => 'ajgdahjdgasjhgasjda'
    ]);
    DB::table('text')->insert([
      'form_name' => 'service_2',
      'html_hash' => 'service_2',
      'value'     => 'adjhgsadhjsagdjasgdjas'
    ]);
    DB::table('text')->insert([
      'form_name' => 'phone',
      'html_hash' => 'phone',
      'value'     => '16 3700-0000'
    ]);
    DB::table('text')->insert([
      'form_name' => 'mobile_phone',
      'html_hash' => 'mobile_phone',
      'value'     => '16 99999-9999'
    ]);
  }
}
