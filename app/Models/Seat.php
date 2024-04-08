<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $table = 'seat';

    protected $fillable = [
        'seat_no',
        'bus_id',
        'bus_schedules_id',
        'user_id',
        'price',
        'booked',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class,'bus_id');
    }

    public function busSchedule()
    {
        return $this->belongsTo(Bus_Schedule::class, 'bus_schedules_id');
    }


   
}