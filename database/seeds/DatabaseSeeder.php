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

        DB::table("users")->insert([
            "name" => "mikakane",
            "email" => "chatbox.soft@gmail.com",
            "password" => Hash::make("secret"),
            "updated_at" => \Carbon\Carbon::now(),
            "created_at" => \Carbon\Carbon::now(),
        ]);
        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
