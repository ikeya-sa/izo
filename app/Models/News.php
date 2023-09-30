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
        'body_1' => 'required|max:255',
        'body_2' => 'max:255',
        'body_3' => 'max:255',
        'body_4' => 'max:255',
        'ref_text_1' => 'required_with:ref_url_1|max:255',
        'ref_url_1' => 'nullable|required_with:ref_text_1|url|max:1000',
        'ref_text_2' => 'required_with:ref_url_2|max:255',
        'ref_url_2' => 'nullable|required_with:ref_text_2|url|max:1000',
        'ref_text_3' => 'required_with:ref_url_3|max:255',
        'ref_url_3' => 'nullable|required_with:ref_text_3|url|max:1000',
        'image' => 'image',
    );
}
