<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'id' => 1,
            'name' => "ワイヤレスイアホン",
            'profile' => "よろしく",
            'images' => null,
            'place_purchase' => null,
            'user_id' => 3
            ]);
        Item::create([
            'id' => 2,
            'name' => "財布",
            'profile' => "よろしく",
            'images' => null,
            'place_purchase' => null,
            'user_id' => 1
            ]);
        Item::create([
            'id' => 3,
            'name' => "キーホルダー",
            'profile' => "よろしく",
            'images' => null,
            'place_purchase' => null,
            'user_id' => 4
            ]);
        Item::create([
            'id' => 4,
            'name' => "ワンピース",
            'profile' => "よろしく",
            'images' => null,
            'place_purchase' => null,
            'user_id' => 5
            ]);
        Item::create([
            'id' => 5,
            'name' => "PC",
            'profile' => "よろしく",
            'images' => null,
            'place_purchase' => null,
            'user_id' => 2
            ]);
    }
}
