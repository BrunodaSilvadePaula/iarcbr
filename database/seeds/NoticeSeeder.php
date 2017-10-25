<?php

use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
  public function run(){
    DB::table('notice')->insert([
      'title'          => 'teste bruno',
      'sub_title'      => 'teste',
      'image'          => 'public/images/notice/notice1.jpg',
      'description'       => 'aslkdjasldjahajdgajgdasjdgasjgd',
      'description_short' => 'blabla'
    ]);
  }
}
