<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $fillable = [
        'top',
        'top_link',
        'side_1',
        'side_1_link',
        'side_2',
        'side_2_link',
        'bottom',
        'bottom_link',
        'social',
    ];
}
