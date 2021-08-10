<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = Role::create([
            'name' => 'administrator',
            'guard_name' => 'web'
        ]);
        $administrator->givePermissionTo([
            'create user',
            'update user',
            'delete user',

            'create user role',
            'update user role',
            'delete user role',

            'create customer',
            'update customer',
            'delete customer',

            'create product',
            'update product',
            'delete product',

            'create activity sales',
            'update activity sales',
            'delete activity sales',

            'create transaction customer',
            'update transaction customer',
            'delete transaction customer',
        ]);

        $directure = Role::create([
            'name' => 'directure',
            'guard_name' => 'web'
        ]);

        $finance = Role::create([
            'name' => 'finance',
            'guard_name' => 'web'
        ]);
        $finance->givePermissionTo([
            'create transaction customer',
            'update transaction customer',
            'delete transaction customer',
        ]);

        $sales_corporate = Role::create([
            'name' => 'sales corporate',
            'guard_name' => 'web'
        ]);
        $sales_corporate->givePermissionTo([
            'create activity sales',
            'update activity sales',
            'delete activity sales',
        ]);

        $sales_manager = Role::create([
            'name' => 'sales manager',
            'guard_name' => 'web'
        ]);
        $sales_manager->givePermissionTo([
            'create activity sales',
            'update activity sales',
            'delete activity sales',
        ]);

        $sales = Role::create([
            'name' => 'sales',
            'guard_name' => 'web'
        ]);
        $sales->givePermissionTo([
            'create activity sales',
            'update activity sales',
            'delete activity sales',
        ]);
    }
}
