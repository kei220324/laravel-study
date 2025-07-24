<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        // ダミー記事生成件数
        $num = 150;

        $categories = Category::all();
        $insertData = array_map(
            function($no) use($num, $categories) {
                $created_at = today()->subMinutes($num+$no+1)->setHours(random_int(9, 18))->setMinutes(random_int(0, 59));
                $updated_at = random_int(0, 1) === 1 ? today()->subMinutes(random_int(1, $num+$no))->setHours(random_int(9, 18))->setMinutes(random_int(0, 59)) : $created_at;
                return [
                    'category_id' => $categories->random()->id,
                    'title' => 'ダミー記事'. $no,
                    'image' => 'blogs/dummy.jpg',
                    'body' => "ブログ記事のダミー本文です。\nここで改行されています\n\nここには空行が設定されています\n<p>ここはpタグで囲われています</p><script>alert('アラートが実行されたらXSS対策不備')</script>",
                    'created_at' => $created_at,
                    'updated_at' => $updated_at
                ];
            },
            range(1, $num)
        );
        DB::table('blogs')->insert($insertData);
    }
}
