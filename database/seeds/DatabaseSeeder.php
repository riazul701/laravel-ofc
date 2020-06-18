<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

//        DB::table('users')->insert([
//            'name' => Str::random(10),
//            'email' => Str::random(10).'@gmail.com',
//            'password' => Hash::make('password'),
//        ]);

//        factory(App\User::class, 5)->create()->each(function ($user) {
//            $user->posts()->save(factory(App\Post::class)->make(['user_id' => NULL]));
//        });

        $this->call([
            CustomerSeeder::class,
            DistributorSeeder::class,
            SupplierSeeder::class
        ]);
    }
}
