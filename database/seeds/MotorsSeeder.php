<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motors')->insert([
            'nama_kendaraan' => 'genio',
            'student_id' => 1,
            'warna' => 'hitam',
            'platno' => 'D1234CD',
        ]);
    }
}
