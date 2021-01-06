<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable = [
        'a',
        'aa',
        'b',
        'bb',
        'c',
        'cc',
        'd',
        'dd',
        'about_title',
        'about',
        'address',
        'phone',
        'mail',
        'office_hour',
    ];
}
