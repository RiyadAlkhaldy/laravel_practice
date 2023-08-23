<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Test::factory()->count( 1000)->create();
//        for ($i=0;$i<1000;$i++){
//            Test::create([
//                "name"=>"test _ ".$i,
//                "content"=>"the content ".$i,
//            ]);
   //        }

//         for ($i=0;$i<10000;$i++){
//            Test::create([
//                "name"=>"test _ ".$i,
//                "content"=>"the content ".$i,
//            ]);
//        }
        for ($i=0;$i<10000;$i++){
            DB::table('tests')->insert([
                "name"=>"test _ ".$i,
                "content"=>"the content ".$i,
            ]);
        }
    }
}
