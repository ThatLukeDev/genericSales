<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $fillable = [
		"name",
		"title",
		"text",
		"description"
	];

	public static function get($name) {
		return Page::where("name", $name)->firstOr(function() {
			return Page::firstOrCreate(["name" => "error"], [
				"name" => "error",
				"title" => "404",
				"text" => "Page not found",
				"description" => "Please return home"
			]);
		});
	}
}
