<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required|max:90',
        'body' => 'required|max:3000',
        'ref_text_1' => 'max:255',
        'ref_url_1' => 'nullable|url|max:1000',
        'ref_text_2' => 'max:255',
        'ref_url_2' => 'nullable|url|max:1000',
    );
}
