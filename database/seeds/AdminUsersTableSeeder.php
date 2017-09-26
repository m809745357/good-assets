<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$nOyRDXbHhM7QIUf/MFglLuq7QRwK/4COpVYw24QkQF7Z89qkhM6xy',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2017-09-25 15:57:32',
                'updated_at' => '2017-09-25 15:57:32',
            ),
        ));
        
        
    }
}