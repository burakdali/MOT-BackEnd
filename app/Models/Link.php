<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'facebook',
        'instagram',
        'x',
        'linked_in',
        'location',
        'phone_number',
        'email',
    ];
}
