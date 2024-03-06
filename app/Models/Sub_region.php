<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_region extends Model
{
    use HasFactory;
    protected $table = 'sub_regions';
    protected $primaryKey = 'id';

    protected $fillable = [
        'sub_region_name',
        'sub_region_code',
        'region_id',
        'status',
    ];

    // Region model
public function region()
{
    return $this->belongsTo(Region::class, 'region_id', 'id');
}


}
