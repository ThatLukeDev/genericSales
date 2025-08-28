<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Page;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin',
        ]);

	Page::create([
		"name" => "Home",
		"title" => "Welcome to home",
		"text" => "this is text",
		"description" => "this is description"
	]);
	Page::create([
		"name" => "About",
		"title" => "Welcome to about",
		"text" => "this is text",
		"description" => "this is description"
	]);
	Page::create([
		"name" => "Contact",
		"title" => "Welcome to contact",
		"text" => "this is text",
		"description" => "this is description"
	]);
    }
}
