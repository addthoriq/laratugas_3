<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
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
                'name'          => 'Admin',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'name'          => 'Penulis',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
        ];
        DB::table('roles')->truncate();
        DB::table('roles')->insert($data);
    }
}
