<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data   = [
            [
                'name'  => 'Novel',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'  => 'Agama',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'  => 'Cerpen',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'  => 'Pelajaran',
                'created_at'  => now(),
                'updated_at'  => now(),
            ]
        ];
        DB::table('categories')->truncate();
        DB::table('categories')->insert($data);
    }
}
