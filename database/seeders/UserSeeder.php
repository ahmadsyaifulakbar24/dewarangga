<?php

namespace Database\Seeders;

use App\Models\User;
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
        $administrator = User::create([
            'username' => 'administrator',
            'name' => 'Administrator',
            'nik' => 3174082403000005,
            'email' => 'administrator@app.com',
            'phone_number' => '085155476533',
            'gender' => 'female',
            'address' => 'citayam kp.kelapa desa rawapanjang',
            'password' => Hash::make('12345678'),
        ]);
        $administrator->assignRole('administrator');

        $directure = User::create([
            'username' => 'directure',
            'name' => 'Directure',
            'nik' => 3174082403000005,
            'email' => 'directure@app.com',
            'phone_number' => '085155476533',
            'gender' => 'female',
            'address' => 'citayam kp.kelapa desa rawapanjang',
            'password' => Hash::make('12345678'),
        ]);
        $directure->assignRole('directure');

        $finance = User::create([
            'username' => 'finance',
            'name' => 'Finance',
            'nik' => 3174082403000005,
            'email' => 'finance@app.com',
            'phone_number' => '085155476533',
            'gender' => 'female',
            'address' => 'citayam kp.kelapa desa rawapanjang',
            'password' => Hash::make('12345678'),
        ]);
        $finance->assignRole('finance');

        $sales_corporate = User::create([
            'username' => 'sales_corporate',
            'name' => 'Sales Corporate',
            'nik' => 3174082403000005,
            'email' => 'sales_corporate@app.com',
            'phone_number' => '085155476533',
            'gender' => 'female',
            'address' => 'citayam kp.kelapa desa rawapanjang',
            'password' => Hash::make('12345678'),
        ]);
        $sales_corporate->assignRole('sales corporate');

        $sales_manager = User::create([
            'username' => 'sales_manager',
            'name' => 'Sales Manager',
            'nik' => 3174082403000005,
            'email' => 'sales_manager@app.com',
            'phone_number' => '085155476533',
            'gender' => 'female',
            'address' => 'citayam kp.kelapa desa rawapanjang',
            'password' => Hash::make('12345678'),
        ]);
        $sales_manager->assignRole('sales manager');

        $sales = User::create([
            'username' => 'sales',
            'name' => 'sales',
            'nik' => 3174082403000005,
            'email' => 'sales@app.com',
            'phone_number' => '085155476533',
            'gender' => 'female',
            'address' => 'citayam kp.kelapa desa rawapanjang',
            'password' => Hash::make('12345678'),
        ]);
        $sales->assignRole('sales');
    }
}
