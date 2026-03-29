<?php

namespace Database\Seeders;
use App\Models\Cake;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cake::create([
        'name' => 'Cake Tot',
        'description' => 'Delicious cake',
        'price' => 500,
        'image' => 'image.1.png'
    ]);

    Cake::create([
        'name' => 'Cake Strawberry',
        'description' => 'Strawberry cake',
        'price' => 900,
        'image' => 'image.2.png'
    ]);

    Cake::create([
        'name' => 'Cake Cream',
        'description' => 'Creamy cake',
        'price' => 300,
        'image' => 'image.3.png'
    ]);
      Cake::create([
        'name' => 'Cake Blubary',
        'description' => 'Creamy cake',
        'price' => 300,
        'image' => 'image.4.jpg'
    ]);
      Cake::create([
        'name' => 'Cake butterfly',
        'description' => 'Creamy  Strawbery cake',
        'price' => 700,
        'image' => 'image.5.jpg'
    ]);
      Cake::create([
        'name' => 'Cake Red Flower',
        'description' => 'Creamy cake Red',
        'price' => 800,
        'image' => 'image.6.jpg'
    ]);
      Cake::create([
        'name' => 'Cake choclate bluebery',
        'description' => 'Creamy cheese cake ',
        'price' => 400,
        'image' => 'image.7.jpg'
    ]);
      Cake::create([
        'name' => 'Cheese Cake ',
        'description' => 'Creamy cake Cheese Bluebury',
        'price' => 300,
        'image' => 'image.8.jpg'
    ]);
      Cake::create([
        'name' => 'Cake Choclate',
        'description' => 'Creamy cake chocolate',
        'price' => 200,
        'image' => 'image.9.jpg'
    ]);
      Cake::create([
        'name' => 'Cake Kender ',
        'description' => 'Creamy cake kender',
        'price' => 800,
        'image' => 'image.10.jpg'
    ]);
    Cake::create([
        'name' => 'Cake pistachio vanilia',
        'description' => 'Creamy cake pistachio vanilia',
        'price' => 600,
        'image' => 'image.11.jpg'
    ]);
    Cake::create([
        'name' => 'Cake pistachio chocolate',
        'description' => 'Creamy cake pistachio chocolate',
        'price' => 500,
        'image' => 'image.12.jpg'
    ]);
    }
}
