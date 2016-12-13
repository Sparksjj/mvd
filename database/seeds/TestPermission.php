<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Group;

class TestPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {            
            User::create([
                'name' => 'device',
                'email' => 'device@mail.ru',
                'password' => bcrypt('qwerty'),
            ]);
            User::create([
                'name' => 'user',
                'email' => 'user@mail.ru',
                'password' => bcrypt('qwerty'),
            ]);        	

            $g = Group::where('id', 3)->first();
        	$u = User::where('email', 'device@mail.ru')->first();
        	$u->groups()->attach($g->id);

            $2g = Group::where('id', 1)->first();
        	$2u = User::where('email', 'user@mail.ru')->first();
        	$2u->groups()->attach($2g->i2d);
    }
}
