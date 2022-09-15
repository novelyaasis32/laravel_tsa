<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            ['nama_kelas' => 'TI 2A',],
            ['nama_kelas' => 'TI 2B',],
            ['nama_kelas' => 'TI 2C',],
            ['nama_kelas' => 'TI 2D',],
        ];
        
        DB::table('kelas')->insert($kelas);
    }
}
