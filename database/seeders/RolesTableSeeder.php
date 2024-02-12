<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();

        \DB::table('roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'slug' => 'administrators',
                'name' => 'Administrators',
                'created_at' => '2023-08-28 13:49:34',
                'updated_at' => '2023-08-28 13:49:34',
            ),
            1 =>
            array (
                'id' => 2,
                'slug' => 'merchants',
                'name' => 'Merchants',
                'created_at' => '2023-08-28 13:49:34',
                'updated_at' => '2023-08-28 13:49:34',
            ),
            2 =>
            array (
                'id' => 3,
                'slug' => 'cashiers',
                'name' => 'Cashiers',
                'created_at' => '2023-08-28 13:49:34',
                'updated_at' => '2023-08-28 13:49:34',
            ),
            3 =>
            array (
                'id' => 4,
                'slug' => 'customers',
                'name' => 'Customers',
                'created_at' => '2023-08-28 13:49:34',
                'updated_at' => '2023-08-28 13:49:34',
            ),
            4 =>
            array (
                'id' => 5,
                'slug' => 'drivers',
                'name' => 'Drivers',
                'created_at' => '2023-08-28 13:49:34',
                'updated_at' => '2023-08-28 13:49:34',
            ),
        ));


    }
}
