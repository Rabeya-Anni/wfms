<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
            'username'=>'admin',
            'email'=>'admin.panel@gmail.com',
            'password'=>bcrypt('admin'),
            'phone_number'=>'0130',
            'address'=>'uttara', 
            'role'=>'admin',
            ] 
        );
        
    }
}
