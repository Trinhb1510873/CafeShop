<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
        $permission_danhmuc_xem = Permission::create(['name' => 'danhmuc_xem']);
        $permission_danhmuc_them = Permission::create(['name' => 'danhmuc_them']);
        $permission_danhmuc_sua = Permission::create(['name' => 'danhmuc_sua']);
        $permission_danhmuc_xoa = Permission::create(['name' => 'danhmuc_xoa']);
        $permission_order = Permission::create(['name' => 'order']);
        $permission_danhmuc_print = Permission::create(['name' => 'print']);
        $permission_danhmuc_excel = Permission::create(['name' => 'excel']);
        $permission_danhmuc_pdf = Permission::create(['name' => 'pdf']);

        //cap quyen cho vai tro
        $role_quan_tri->givePermissionTo(array($permission_danhmuc_xem, $permission_danhmuc_them, $permission_danhmuc_sua, $permission_danhmuc_xoa, $permission_order));
        $role_quan_tri->givePermissionTo(array($permission_danhmuc_print, $permission_danhmuc_excel, $permission_danhmuc_pdf));
        $role_user->givePermissionTo($permission_order);

    }
}
