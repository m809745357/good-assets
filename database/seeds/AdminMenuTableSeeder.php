<?php

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Index',
                'icon' => 'fa-bar-chart',
                'uri' => '/',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 6,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => '',
                'created_at' => NULL,
                'updated_at' => '2017-09-26 09:06:25',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 7,
                'title' => 'Users',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'created_at' => NULL,
                'updated_at' => '2017-09-26 09:06:25',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 8,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'created_at' => NULL,
                'updated_at' => '2017-09-26 09:06:25',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 9,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'created_at' => NULL,
                'updated_at' => '2017-09-26 09:06:25',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 10,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'created_at' => NULL,
                'updated_at' => '2017-09-26 09:06:25',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 11,
                'title' => 'Operation log',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'created_at' => NULL,
                'updated_at' => '2017-09-26 09:06:25',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 5,
                'title' => '官网配置',
                'icon' => 'fa-cogs',
                'uri' => 'configs',
                'created_at' => '2017-09-25 16:05:48',
                'updated_at' => '2017-09-26 09:06:25',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'order' => 2,
                'title' => '众筹项目',
                'icon' => 'fa-product-hunt',
                'uri' => '/projects',
                'created_at' => '2017-09-26 09:05:01',
                'updated_at' => '2017-09-26 09:05:06',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 0,
                'order' => 3,
                'title' => '众筹新闻',
                'icon' => 'fa-newspaper-o',
                'uri' => '/tidings',
                'created_at' => '2017-09-26 09:05:29',
                'updated_at' => '2017-09-26 09:05:35',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'order' => 4,
                'title' => '股权转让',
                'icon' => 'fa-money',
                'uri' => '/properties',
                'created_at' => '2017-09-26 09:06:16',
                'updated_at' => '2017-09-26 09:06:25',
            ),
        ));
        
        
    }
}