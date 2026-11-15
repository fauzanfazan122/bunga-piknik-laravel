<?php


namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        // isi data
        $user->nama = 'BungaPiknik';
        $user->username = 'adminbunga';
        $user->password = 'bungapiknikhebat24';
        $user->email = 'admin@bungapiknik.com';
        $user->no_hp = '085159920061';
        $user->alamat = null;
        $user->role = 'admin';

        $user->save();
    }
}
