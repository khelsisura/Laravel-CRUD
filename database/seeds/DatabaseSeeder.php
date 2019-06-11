<?php

use Illuminate\Database\Seeder;
use UserInfoTableSeeder as UserInfo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserInfo::class);
    }
}
