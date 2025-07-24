<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTruncateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // 外部キー制約があっても大丈夫にする
        DB::table('blogs')->truncate();             // blogs テーブルのデータ削除
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // 外部キー制約を戻す
    }
}
