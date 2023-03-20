<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => "よこち",
            'profile' => "気持ちよく取引できればいいなあ",
            'icon' => null,
            'email' => 'yokotaku327@gmail.com',
            'password' => Hash::make('secretid1')
            ]);
            
        User::create([
            'id' => 2,
            'name' => "ゴリぺん",
            'profile' => "いらないものが多いので出品多いと思います。",
            'icon' => null,
            'email' => 'gorigori@gmail.com',
            'password' => Hash::make('secretid2')
            ]);
        
        
        User::create([
            'id' => 3,
            'name' => "山ちゃん",
            'profile' => "ポケモンカードを売ってくよー",
            'icon' => null,
            'email' => 'yamayama@gmail.com',
            'password' => Hash::make('secretid3')
            ]);
        
        User::create([
            'id' => 4,
            'name' => "マリック",
            'profile' => "配送料ないんで大きいものを安く売りたいと思います",
            'icon' => null,
            'email' => 'teshiteshi@gmail.com',
            'password' => Hash::make('secretid4')
            ]);    
    
        User::create([
            'id' => 5,
            'name' => "かんた",
            'profile' => "チャリ欲しい人います？",
            'icon' => null,
            'email' => 'kankan@gmail.com',
            'password' => Hash::make('secretid5')
            ]);
    }
}
