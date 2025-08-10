<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        "page",
        "title",
        "text",
        "description"
    ];

    public static function getPage($page) {
        return Detail::firstOrCreate(["page" => $page], ["title" => "Title", "text" => "Text", "description" => "Description"]);
    }
}
