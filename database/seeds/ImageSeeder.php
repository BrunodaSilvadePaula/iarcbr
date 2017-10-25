<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
  public function run(){
    DB::table('image')->insert([
      'image'    => 'public/images/page/logo.png',
      'html_hash'   => 'logo',
    ]);
    DB::table('image')->insert([
      'image'    => 'public/images/page/quem-somos.png',
      'html_hash'   => 'quem-somos',
    ]);
    DB::table('image')->insert([
      'image'    => 'public/images/page/servicos.png',
      'html_hash'   => 'servicos',
    ]);
    DB::table('image')->insert([
      'image'    => 'public/images/page/clientes.png',
      'html_hash'   => 'clientes',
    ]);
    DB::table('image')->insert([
      'image'    => 'public/images/page/noticias.png',
      'html_hash'   => 'noticias',
    ]);
  }
}
