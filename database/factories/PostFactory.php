<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Fakerのインスタンスに日本語のロケールを設定
        $faker = \Faker\Factory::create('ja_JP');

        return [
            'title' => $faker->sentence, // タイトルのランダムな文を生成
            'content' => $faker->paragraph, // コンテンツのランダムな段落を生成
            'user_id' => User::inRandomOrder()->first()->id, // ランダムなユーザーのIDを取得
        ];
    }
}