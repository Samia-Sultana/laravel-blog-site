<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /*
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        
       \App\Models\User::factory()->count(10)->create()->each(function($user){
           $user->post()->save(\App\Models\Post::factory()->make());
       });
        //factory is going to create 10 dummy user in user table and then for each dummy user it is going to create an instance of the user and  call the post relationship and then save the post in Post table using factory 
        
        
    }
}
