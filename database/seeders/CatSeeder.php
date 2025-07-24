<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        DB::table('cats')->insert([
            ['name' => 'ルキア', 'breed' => 'スノーシュー', 'gender' => 2, 'date_of_birth'=> '2018-05-12', 'image' => 'blogs/dummy.jpg', 'introduction' => "好奇心が旺盛で、運動神経も良い。\nじっとしていられない性格で疲れて寝るまでうろうろしている。", 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'ノア', 'breed' => 'ラパーマ', 'gender' => 2, 'date_of_birth'=> '2020-08-24', 'image' => 'blogs/dummy.jpg', 'introduction' => "遊ぶ時は他の子のおもちゃを奪うほどの情熱家。\nでも気変わりが多くすぐ別の事を始める。", 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'アルト', 'breed' => 'ラガマフィン', 'gender' => 1, 'date_of_birth'=> '2018-11-16', 'image' => 'blogs/dummy.jpg', 'introduction' => "警戒心が薄く、他の猫達ともすぐ打ち解けられた。\n無邪気に遊ぶが動きはあまり速くない。", 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'さくら', 'breed' => 'オシキャット', 'gender' => 2, 'date_of_birth'=> '2021-07-21', 'image' => 'blogs/dummy.jpg', 'introduction' => "テンションが高く、予測不能の行動をする。\nスタミナが無いのかすぐへばる。", 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'ハヤテ', 'breed' => 'バーマン', 'gender' => 1, 'date_of_birth'=> '2021-12-06', 'image' => 'blogs/dummy.jpg', 'introduction' => "お昼寝が大好きでいつでもどこでも寝れ\n一度寝だすと何しても起きない。", 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'リリー', 'breed' => 'メインクーン', 'gender' => 2, 'date_of_birth'=> '2022-02-18', 'image' => 'blogs/dummy.jpg', 'introduction' => "気が小さくビビリな子。\n隅っこでキョロキョロしてる事が多い", 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
