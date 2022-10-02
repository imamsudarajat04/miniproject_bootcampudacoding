<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'      => 'Imam Sudarajat',
            'email'     => 'kazeonets04@gmail.com',
            'password'  => Hash::make('12345'),
            'phone'     => '083183462191',
            'address'   => 'Jl. Ganet Block B1 No. 09',
            'role'      => 'admin'
        ]);
    }
}
