<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([ 'name' => 'create user']);
        Permission::create([ 'name' => 'update user']);
        Permission::create([ 'name' => 'delete user']);

        Permission::create([ 'name' => 'create user role']);
        Permission::create([ 'name' => 'update user role']);
        Permission::create([ 'name' => 'delete user role']);

        Permission::create([ 'name' => 'create customer']);
        Permission::create([ 'name' => 'update customer']);
        Permission::create([ 'name' => 'delete customer']);

        Permission::create([ 'name' => 'create product']);
        Permission::create([ 'name' => 'update product']);
        Permission::create([ 'name' => 'delete product']);
        
        Permission::create([ 'name' => 'create activity sales']);
        Permission::create([ 'name' => 'update activity sales']);
        Permission::create([ 'name' => 'delete activity sales']);

        Permission::create([ 'name' => 'create transaction customer']);
        Permission::create([ 'name' => 'update transaction customer']);
        Permission::create([ 'name' => 'delete transaction customer']);

        
    }
}
