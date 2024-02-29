<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'regions';
    protected $primaryKey = 'id';

    protected $fillable = [
        'region_name',
        'region_code',
        'status',
    ];
}

