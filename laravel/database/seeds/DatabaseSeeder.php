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
        DB::table('products')->insert([
            'name' => str_random(10),
            'detail' => str_random(10),
            'created_at' => $todayDate = date("Y-m-d H:i:s"),
            'updated_at' => $todayDate = date("Y-m-d H:i:s"),      
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'detail' => str_random(10),
            'created_at' => $todayDate = date("Y-m-d H:i:s"),
            'updated_at' => $todayDate = date("Y-m-d H:i:s"),                       
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'detail' => str_random(10),
            'created_at' => $todayDate = date("Y-m-d H:i:s"),
            'updated_at' => $todayDate = date("Y-m-d H:i:s"),                       
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'detail' => str_random(10), 
            'created_at' => $todayDate = date("Y-m-d H:i:s"),
            'updated_at' => $todayDate = date("Y-m-d H:i:s"),                      
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'detail' => str_random(10),   
            'created_at' => $todayDate = date("Y-m-d H:i:s"),
            'updated_at' => $todayDate = date("Y-m-d H:i:s"),                    
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'detail' => str_random(10),   
            'created_at' => $todayDate = date("Y-m-d H:i:s"),
            'updated_at' => $todayDate = date("Y-m-d H:i:s"),                    
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'detail' => str_random(10),   
            'created_at' => $todayDate = date("Y-m-d H:i:s"),
            'updated_at' => $todayDate = date("Y-m-d H:i:s"),                    
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'detail' => str_random(10),   
            'created_at' => $todayDate = date("Y-m-d H:i:s"),
            'updated_at' => $todayDate = date("Y-m-d H:i:s"),                    
        ]);
    }

}
