<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        DB::table('users')->insert([
            'name' => 'Ana Pérez',
            'email' => 'admin@demo.com',
            'password' => bcrypt('admin123'),
            'role_id' => 1,
            'remember_token' => str_random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Julio Mantilla',
            'email' => 'editor@demo.com',
            'password' => bcrypt('editor123'),
            'role_id' => 2,
            'remember_token' => str_random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        factory(App\Article::class, 2)->create();
        factory(App\Comment::class, 3)->create();

        Model::reguard();
    }
}
