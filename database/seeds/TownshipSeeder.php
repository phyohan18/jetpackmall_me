<?php

use Illuminate\Database\Seeder;
use App\Township;

class TownshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Township::create([
        	'name'=>'Pazundaung',
        	'price'=>'2000'
        ]); 

        Township::create([
        	'name'=>'Tarmwe',
        	'price'=>'2000'
        ]);  

        Township::create([
        	'name'=>'Yankin',
        	'price'=>'2000'
        ]);


    }
}
