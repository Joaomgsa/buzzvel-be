<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    use HasFactory;
    protected $table = 'locations';
    protected $fillable = ['name', 'city','state','country'];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
