<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        [
            'name' => 'Bima',
            'namaLengkap' => 'Bima Putra',
            'email' => 'bimaputra@gmail.com',
            'namaPanggilan' => 'Bima',
            'nim' => '2141720255',
            'kelas' => '2G',
            'noAbsen' => '08',
            'prodi' => 'D4-TI',
            'jurusan' => 'Teknologi Informasi',
            'universitas' => 'Polinema'

        ],
        [
            'name' => 'Fina',
            'namaLengkap' => 'Fina Orivia',
            'email' => 'finaorivia@gmail.com',
            'namaPanggilan' => 'Fina',
            'nim' => '2141720256',
            'kelas' => '2G',
            'noAbsen' => '13',
            'prodi' => 'D4-TI',
            'jurusan' => 'Teknologi Informasi',
            'universitas' => 'Polinema'
        ]
        
        ];
        DB::table('users')->insert($data);
    }
}
