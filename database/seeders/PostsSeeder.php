<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Post();
        $p->content = "cualquier cosa #1";
        $p->user_id = 1;
        $p->save();

        $p = new Post();
        $p->content = "cualquier cosa #2";
        $p->user_id = 1;
        $p->save();

        $p = new Post();
        $p->content = "cualquier cosa #3";
        $p->user_id = 1;
        $p->save();

        $p = new Post();
        $p->content = "cualquier cosa #4";
        $p->user_id = 2;
        $p->save();

        $p = new Post();
        $p->content = "cualquier cosa #5";
        $p->user_id = 2;
        $p->save();

        /*  DB::table('posts')->insert([
            'content' => "Cualquier cosa #1",
            'user_id' => "1",
        ]);
        DB::table('posts')->insert([
            'content' => "Cualquier cosa #2",
            'user_id' => "1",
        ]);
        DB::table('posts')->insert([
            'content' => "Cualquier cosa #3",
            'user_id' => "1",
        ]);
        DB::table('posts')->insert([
            'content' => "Cualquier cosa #4",
            'user_id' => "2",
        ]);
        DB::table('posts')->insert([
            'content' => "Cualquier cosa #5",
            'user_id' => "2",
        ]); */
    }
}
