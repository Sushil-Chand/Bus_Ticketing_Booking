<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $table = 'buses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'bus_name',
        'bus_code',
        'type',
        'operator_id',
        'total_seats',
        'seats_price',
        'amenities',
        'status',
        'driver_id',
        'status'
    ];

    public function operator()
    {
        return $this->belongsTo(Operator::class, 'operator_id');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
