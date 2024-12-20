<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'neme' => 'required',
        'gender' => 'required',
        'hobby'=>'required',
        'introduction'=>'rewuired',
    );
}
