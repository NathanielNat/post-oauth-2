<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        // create 6 users
        // User::factory(1)->create()->each(function ($user){

        //     // create 15 posts for each user
        //     $post = Post::factory(1)->create()->each(function ($post){
        //     // /create 5 comments for each post
        //     $comment = Comment::factory(1)->make();
        //     $post->comments()->saveMany($comment);
        //     });
        //     $user->posts()->saveMany($post);
        // });   
        

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        Post::truncate();
        Comment::truncate();
        User::factory(10)->create();
        Post::factory(50)->create();
        Comment::factory(100)->create();
        // Enable it back
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
 
    }
}
