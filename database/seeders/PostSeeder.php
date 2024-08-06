<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post; // Postモデルをインポート

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ダミーデータを5件生成してpostsテーブルに挿入
        Post::factory()->count(5)->create();
    }
}