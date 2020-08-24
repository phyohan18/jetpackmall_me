<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
        	'name'=>'PPSH',
        	'profile'=>'images/user/admin.png',
        	'email'=>'admin@gmail.com',
        	'password'=> Hash::make('123456789'),
        	'phone'=>'0987513213',
        	'address'=> 'Yangon'
        ]); 
        $admin->assignRole('admin');

        $customer = User::create([
        	'name'=>'Ya Thaw',
        	'profile'=>'images/user/user.jpeg',
        	'email'=>'user@gmail.com',
        	'password'=> Hash::make('123456789'),
        	'phone'=>'0987513213',
        	'address'=> 'Yangon'
        ]); 
        $customer->assignRole('customer');
    }
}
