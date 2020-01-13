<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
        //tao vai tro
        $role_quan_tri = Role::create(['name' => 'quan_tri']);
        $role_user = Role::create(['name' => 'user']);

        //tao quyen
        $permission_sp_xem = Permission::create(['name' => 'sp_xem']);
        $permission_sp_them = Permission::create(['name' => 'sp_them']);
        $permission_sp_sua = Permission::create(['name' => 'sp_sua']);
        $permission_sp_xoa= Permission::create(['name' => 'sp_xoa']);

        //cap quyen cho vai tro
        $role_quan_tri->givePermissionTo($permission_sp_xem);
        $role_quan_tri->givePermissionTo($permission_sp_them);
        
        //quyen duoc cap cho vai tro
            // $permission->assignRole($role);

    }
}
