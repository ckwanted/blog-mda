<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(PermissionTableSeeder::class);
        factory(App\User::class)->create();
        factory(App\Article::class, 2)->create();
        factory(App\Comment::class, 3)->create();

        Model::reguard();
    }
}
