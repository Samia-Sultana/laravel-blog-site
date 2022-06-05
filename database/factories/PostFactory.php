<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>\App\Models\User::factory(),//create dummy data where user_id is related to the User table
            'title'=>'hi my baby',
            'post_image'=>'app\image',
            'body'=>'leorem epsumn whatever content'
        ];
    }
}
