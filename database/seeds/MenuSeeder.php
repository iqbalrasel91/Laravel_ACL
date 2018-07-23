<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->truncate();
        DB::table('menus')->insert(
            array
            (
                /**
                 *
                 * @user management
                 *
                 */

                array('id'=>'1','parent_id' => 0,'action'=>NULL,'name'  => 'Add Role', 'menu_url'  => 'add-role.index', 'module_id'  => '1', 'status'  => '1','module_group_id'=>'1'),
                array('id'=>'2','parent_id' => 1,'action'=> 1,'name'  => 'Add', 'menu_url'  => 'add-role.create', 'module_id'  => '1', 'status'  => '1','module_group_id'=>'1.1'),
                array('id'=>'3','parent_id' => 1,'action'=> 1,'name'  => 'Edit', 'menu_url'  => 'add-role.edit', 'module_id'  => '1', 'status'  => '1','module_group_id'=>'1.2'),
                array('id'=>'4','parent_id' => 1,'action'=> 1,'name'  => 'Delete', 'menu_url'  => 'add-role.destroy', 'module_id'  => '1', 'status'  => '1','module_group_id'=>'1.3'),

                array('id'=>'5','parent_id' => 0,'action'=>NULL,'name'  => 'Role Permission', 'menu_url'  => 'permission.index', 'module_id'  => '1', 'status'  => '1','module_group_id'=>'1.4'),
                array('id'=>'6','parent_id' => 0,'action'=>NULL,'name'  => 'Change Password', 'menu_url'  => 'changePassword.index', 'module_id'  => '1', 'status'  => '1','module_group_id'=>'1.5'),

                array('id'=>'7','parent_id' => 0,'action'=>NULL,'name'  => '', 'menu_url'  => 'user.index', 'module_id'  => '2', 'status'  => '1','module_group_id'=>'2'),
                array('id'=>'8','parent_id' => 7,'action'=> 7,'name'  => 'Add', 'menu_url'  => 'user.create', 'module_id'  => '1', 'status'  => '1','module_group_id'=>'2.1'),
                array('id'=>'9','parent_id' => 7,'action'=> 7,'name'  => 'Edit', 'menu_url'  => 'user.edit', 'module_id'  => '1', 'status'  => '1','module_group_id'=>'2.2'),
                array('id'=>'10','parent_id' => 7,'action'=> 7,'name'  => 'Delete', 'menu_url'  => 'user.destroy', 'module_id'  => '1', 'status'  => '1','module_group_id'=>'2.3'),

            )
        );

    }
}
