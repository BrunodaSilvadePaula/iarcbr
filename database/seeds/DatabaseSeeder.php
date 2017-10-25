<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(ContactSeeder::class);
      $this->call(ImageSeeder::class);
      $this->call(NoticeSeeder::class);
      $this->call(TextSeeder::class);
    }
}
