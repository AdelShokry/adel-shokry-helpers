<?php

use Illuminate\Database\Seeder;

class LangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \Control::store(request(),'lang',[
            'name' => 'العربية',
            'code' => 'ar',
            'flug' => 'sa.png',
            'default' => 1
            ]);
        
    }
}
