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
        'email' => 'required|email|max:254',
        'tel' => 'nullable|regex:/^[0-9\-]+$/|max:13',
        'genre' => 'max:120',
        'message' => 'required|max:1000',
    );
    
    public static $rules_admin = array(
        'reply_date' => 'nullable|date',
        'reply_notes' => 'max:1000',
    );
}
