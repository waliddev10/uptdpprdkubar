<?php

namespace Database\Seeders;

use App\Models\Bidang;
use App\Models\Pangkat;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            'kode' => '001',
            'password' => Hash::make('001'),
            'nama' => 'Kesya Miranda Hutagalung, A.Md.Pnl.',
            'tempat_lahir' => 'Medan',
            'tgl_lahir' => '1999-07-02',
            'jenis_kelamin' => 0,
            'nip_nik' => '19990702 202201 2 007',
            'jabatan' => 'Pengolah Data Pelayanan',
            'pangkat' => 'Pengatur (II/c)',
            'role' => 'admin',
        ]);
    }
}
