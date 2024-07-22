<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::factory()->create([
            'name' => 'Hazlifah'
        ]);
        
        $user2 = User::factory()->create([
            'name' => 'Khairil'
        ]);
        
        $category1 = Category::factory()->create([
            'name' => 'Motorcar'
        ]);

        $category2 = Category::factory()->create([
            'name' => 'Motorcycle'
        ]);
        
        $category3 = Category::factory()->create([
            'name' => 'Van'
        ]);
        
        Post::factory(3)->create([
            'user_id' => $user1->id,
            'category_id' => $category1->id
        ]);
        
        Post::factory(2)->create([
            'user_id' => $user2->id,
            'category_id' => $category2->id
        ]);
        
        Post::factory(4)->create([
            'user_id' => $user1->id,
            'category_id' => $category3->id
        ]);
        
        Post::factory(3)->create([
            'user_id' => $user2->id,
            'category_id' => $category3->id
        ]);
        
        
    }
}
