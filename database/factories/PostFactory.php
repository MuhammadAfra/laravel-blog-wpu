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
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' =>$this->faker->slug(), // membuat fakerslug
            'excerpt' => $this->faker->paragraph(), // membuat faker paragraph
            'body'=>$this->faker->paragraph(5,10), //membuat faker paragraph 5 - 10 paragraph
            'user_id' => mt_rand(1,3), //mt_rand untuk mengacak apa yang kita mau dari user_id=1 sampe user_id=3
            'category_id'=> mt_rand(1,2) //mt_rand untuk mengacak apa yang kita mau dari id=1 sampe id=2
        ];
    }
}
