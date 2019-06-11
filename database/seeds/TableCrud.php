<?php

use Illuminate\Database\Seeder;

class TableCrud extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TableCrud::class, 5)->create();
    }
}
