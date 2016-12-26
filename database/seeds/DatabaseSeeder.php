<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeed::class);
        $this->call(PermissionSeader::class);
        $this->call(ContentSeed::class);
        $this->call(TestPermission::class);
    }
}
