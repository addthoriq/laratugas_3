<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker   = Factory::create('id_ID');
        $user_id = DB::table('users')->pluck('id');
        $cat_id  = DB::table('categories')->pluck('id');
        for ($i=0; $i < 10; $i++)
        {
            $data[$i]   = [
                'user_id' => $faker->randomElement($user_id),
                'title'   => $faker->sentence(3),
                'content' => $faker->paragraphs(3, true),
                'category_id'   => $faker->randomElement($cat_id)
                // 'category_id'   => 2
            ];
        }
        DB::table('articles')->truncate();
        DB::table('articles')->insert($data);
    }
}
