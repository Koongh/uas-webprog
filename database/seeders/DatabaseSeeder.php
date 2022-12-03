<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $motorcycles = [
            ['name' => 'motor 1',
            'manufacturer' => 'honda',
            'year' => 2020],
            ['name' => 'motor 2',
            'manufacturer' => 'yamaha',
            'year' => 2012]
        ];

        foreach($motorcycles as $motorcycle){
            \App\Models\Motorcycle::create($motorcycle);
        }

        $categories = [['name' => 'category 1'], ['name' => 'category 2']];

        foreach($categories as $category){
            \App\Models\Category::create($category);
        }

        $items = [
            ['name' => 'item 1',
            'price' => 2000,
            'stock' => 100,
            'description' => 'ini description item 1',
            'manufacturer' => 'produsen item 1',
            'category_id' => 2],
            ['name' => 'item 2',
            'price' => 3000,
            'stock' => 200,
            'description' => 'ini description item 2',
            'manufacturer' => 'produsen item 2',
            'category_id' => 1]
        ];

        foreach($items as $item){
            \App\Models\Item::create($item);
        }
    }
}
