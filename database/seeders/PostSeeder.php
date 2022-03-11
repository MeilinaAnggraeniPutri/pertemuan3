<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('posts')->insert([
                        'name' => 'Pasta America',
                        'slug' => 'pasta-america',
                        'image' => 'thumb1',
                        'content' => 'Ini adalah pasta 1.',
                        'price' => 50.50,
                        'draft' => 0
                    ]);
            DB::table('posts')->insert([
                        'name' => 'Pasta Eropa',
                        'slug' => 'pasta-eropa',
                        'image' => 'thumb2',
                        'content' => 'Ini adalah pasta 2.',
                        'price' => 10.25,
                        'draft' => 0
                    ]);
            DB::table('posts')->insert([
                        'name' => 'Pasta Asia',
                        'slug' => 'pasta-asia',
                        'image' => 'thumb3',
                        'content' => 'Ini adalah pasta 3.',
                        'price' => 30.50,
                        'draft' => 0
                    ]);

    }
}
