<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    public function definition()
    {
        return [
            'org_path'=>$this->faker->text,
            'thumbnail_path' => "/compressed/".$this->faker->image('public/storage/compressed',200,200, null, false),
            'description'=>$this->faker->text(35)
        ];
    }
}
