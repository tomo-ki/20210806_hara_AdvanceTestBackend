<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    protected $fillable = ['fullname', 'gender', 'email', 'postcode','address','opinion'];

    public static $rules = array(
        'fullname' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'postcode' => 'required|max:8',
        'address' => 'required',
        'building_name' => 'nullable',
        'opinion' => 'required|max:120',
        'created_at' => 'date|nullable',
    );
}
