<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       factory(\App\Models\Product::class,100)->create();
       factory(\App\Models\Review::class,400)->create();
    }
}
