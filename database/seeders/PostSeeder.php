<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Post;
        $data->title = "Lorem ipsum dolor sit amet";
        $data->slug = 'post-1';
        $data->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat ut metus ac tristique. Praesent sapien justo, aliquam non rhoncus at, mattis at augue. Etiam id efficitur ex. Aenean quis feugiat erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis porttitor vestibulum leo id tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta, ex eu varius semper, nisi quam viverra nunc, ut semper urna neque quis ante. Suspendisse non lectus eu elit euismod gravida. Suspendisse bibendum, risus in feugiat sollicitudin, tellus dolor vulputate elit, id eleifend urna lacus non lorem. Aenean dignissim nec diam et tempor. Sed ac sodales justo, vitae auctor lorem. Nam fermentum purus eget nunc pretium venenatis. Donec in leo ac augue tincidunt aliquam vel in est. Proin a tristique elit.';
        $data->image = "1.png";
        $data->category_id = 1;
        $data->save();

        $data = new Post;
        $data->title = "Consectetur adipiscing elit";
        $data->slug = 'post-2';
        $data->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat ut metus ac tristique. Praesent sapien justo, aliquam non rhoncus at, mattis at augue. Etiam id efficitur ex. Aenean quis feugiat erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis porttitor vestibulum leo id tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta, ex eu varius semper, nisi quam viverra nunc, ut semper urna neque quis ante. Suspendisse non lectus eu elit euismod gravida. Suspendisse bibendum, risus in feugiat sollicitudin, tellus dolor vulputate elit, id eleifend urna lacus non lorem. Aenean dignissim nec diam et tempor. Sed ac sodales justo, vitae auctor lorem. Nam fermentum purus eget nunc pretium venenatis. Donec in leo ac augue tincidunt aliquam vel in est. Proin a tristique elit.';
        $data->image = "2.png";
        $data->category_id = 2;
        $data->save();

        $data = new Post;
        $data->title = "Nunc volutpat ut metus ac tristique";
        $data->slug = 'post-3';
        $data->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat ut metus ac tristique. Praesent sapien justo, aliquam non rhoncus at, mattis at augue. Etiam id efficitur ex. Aenean quis feugiat erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis porttitor vestibulum leo id tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta, ex eu varius semper, nisi quam viverra nunc, ut semper urna neque quis ante. Suspendisse non lectus eu elit euismod gravida. Suspendisse bibendum, risus in feugiat sollicitudin, tellus dolor vulputate elit, id eleifend urna lacus non lorem. Aenean dignissim nec diam et tempor. Sed ac sodales justo, vitae auctor lorem. Nam fermentum purus eget nunc pretium venenatis. Donec in leo ac augue tincidunt aliquam vel in est. Proin a tristique elit.';
        $data->image = "3.png";
        $data->category_id = 1;
        $data->save();

        
    }
}
