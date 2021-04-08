<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Category;
        $data->name = "Learn";
        $data->slug = 'learn';
        $data->image = "learning.png";
        $data->save();

        $data = new Category;
        $data->name = "Work";
        $data->slug = 'work';
        $data->image = "work.png";
        $data->save();

        $data = new Category;
        $data->name = "Motivation";
        $data->slug = 'motivation';
        $data->image = "motivation.png";
        $data->save();
    }
}
