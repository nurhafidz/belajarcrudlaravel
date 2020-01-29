<?php

use App\student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        
        $faker = Faker::create('id_ID');
        
        for ($i = 1; $i <= 200; $i++) {
            DB::table('students')->insert([
            'nama' => $faker->name,
            'nisn' => $faker->unique->numberBetween(10000,10200),
            'alamat' => $faker->address,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            
        ]);
        }
    }
}
