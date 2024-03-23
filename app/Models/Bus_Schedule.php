<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus_Schedule extends Model
{
    use HasFactory;
    protected $table = 'bus_schedules';
    protected $primaryKey = 'id';
    protected $fillable = [
        'bus_id',
        'operator_id',
        'region_id',
        'sub_region_id',
        'depart_date',
        'return_date',
        'depart_time',
        'return_time',
        'pickup_address',
        'dropoff_address',
        'fare_amount',
        'status',
    ];

    // protected $casts = [
    //     'depart_time' => 'datetime:Y-m-d H:i:sP',
    //     'return_time' => 'datetime:Y-m-d H:i:sP',
    // ];

    // Define relationships with other models

    public function Bus()
    {
        return $this->belongsTo(Bus::class, 'bus_id');
    }

    public function Operator()
    {
        return $this->belongsTo(Operator::class, 'operator_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function Sub_region()
    {
        return $this->belongsTo(Sub_region::class, 'sub_region_id');
    }

    // Add other relationships as needed
}