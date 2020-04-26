<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LoaiMonAnTableSeeder::class);
        $this->call(BophanTableSeeder::class);
        $this->call(ChucVuTableSeeder::class);
        $this->call(BepTableSeeder::class);
        $this->call(NhomThucDonTableSeeder::class);
        $this->call(DonViTinhTableSeeder::class);
        $this->call(MonAnTableSeeder::class);
        $this->call(HinhAnhTableSeeder::class);
        $this->call(NhaCungCapTableSeeder::class);
        $this->call(KhoTableSeeder::class);
        $this->call(NhomNVLTableSeeder::class);
        $this->call(NVLTableSeeder::class);
        $this->call(TangTableSeeder::class);
        $this->call(BanTableSeeder::class);
        $this->call(CuaHangTableSeeder::class);
        $this->call(ChiNhanhTableSeeder::class);
        $this->call(NhanVienTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UsersNhanVienTableSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(ModelHasRoleTableSeeder::class);
    }

}
