<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expriance extends Model
{
    use HasFactory;
    protected $fillable = [
        'sk_title',
        'sk_exp',
    ];
}
