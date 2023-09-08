<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whychoose extends Model
{
    use HasFactory;

    protected $table = 'whychoose';

    protected $fillable = [
        'title',
        'description',
    ];
}
