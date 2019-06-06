<?php

use Illuminate\Database\Seeder;
use App\User;
use App\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function (User $user){
            $user->news()->saveMany(Factory(News::class, 5)->make());
        });
    }
}
