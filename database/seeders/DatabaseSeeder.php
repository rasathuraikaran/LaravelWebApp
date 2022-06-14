<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\PermissionGroupTableSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {
        $faker=Faker::create();
        foreach(range(1,10) as $index){

   DB::table('posts')->insert([
    'title'=>$faker->sentence,
    'content'=>$faker->text(400)



]);
        }


        $this->call([
            PermissionGroupTableSeeder::class,
            PermissionTableSeeder::class,
            RoleTableSeeder::class,
            UserTableSeeder::class
            ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
