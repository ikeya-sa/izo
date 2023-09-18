<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required|max:90',
        'email' => 'required|max:254',
        'tel' => 'max:13',
        'genre' => 'max:120',
        'message' => 'required|max:3000',
        'reply_date' => 'nullable|date',
        'reply_notes' => 'max:3000',
    );
}
