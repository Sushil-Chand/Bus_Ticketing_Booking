<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = [
        'seat_no',
        'bus_id',
        'bus_schedules_id',
        'user_id',
        'booked',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function busSchedule()
    {
        return $this->belongsTo(Bus_Schedule::class, 'bus_schedules_id');
    }
}