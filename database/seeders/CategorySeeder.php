<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        DB::table('categories')->insert([
            ['name' => '日常', 'created_at' => $now, 'updated_at' => $now],
            ['name' => '成長', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'グッズ', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'その他', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
