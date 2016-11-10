<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Category;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
            User::create([
                'name' => 'admin',
                'email' => 'admin@mail.ru',
                'password' => bcrypt('qwerty'),
            ]);         
            Category::create([
                'name_ru' => 'Тестовая категория',
                'name_en' => 'Test category',
            ]);
    }
}
