<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\User;
use App\Group;

class PermissionSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*user groups*/
            Group::create([
            	'id' => 1,
                'name' => 'user',
            ]);  
            Group::create([
            	'id' => 2,
                'name' => 'museum_employee',
            ]); 
            Group::create([
            	'id' => 3,
                'name' => 'museum_device',
            ]); 
        /* permissions */
            Permission::create([
                'id' => 1,
                'permission' => 'all',
            ]); 
            Permission::create([
                'id' => 2,
                'permission' => 'show materials',
            ]);   
            Permission::create([
                'id' => 3,
                'permission' => 'show device pages',
            ]);  
        /* permissions for admin*/

        	$g = Group::where('id', 2)->first();
        	$u = User::where('id', 1)->first();
        	$u->groups()->attach($g->id);
    }
}
