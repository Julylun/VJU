<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = ['cinema_id', 'name', 'total_seats'];

    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    public function shows()
    {
        return $this->hasMany(Show::class);
    }
}
