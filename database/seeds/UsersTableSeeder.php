<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data   = [
        //     [
        //         'name'  => 'Thoriq',
        //         'email'  => 'thoriq@email.com',
        //         'password'  => bcrypt('123'),
        //         'created_at'  => now(),
        //         'updated_at'  => now(),
        //     ],
        //     [
        //         'name'  => 'Fias',
        //         'email'  => 'fias@email.com',
        //         'password'  => bcrypt('12345'),
        //         'created_at'  => now(),
        //         'updated_at'  => now(),
        //     ]
        // ];

        $faker  = Factory::create('id_ID');
        for ($i=0; $i < 10; $i++)
        {
            $data[$i] = [
                'name'  => $faker->name,
                'email'  => $faker->freeEmail,
                'password'  => bcrypt('123'),
                'created_at'  => now(),
                'updated_at'  => now(),
            ];
        }
        DB::table('users')->truncate();
        DB::table('users')->insert($data);
    }
}
