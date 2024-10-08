<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';
    protected $fillable = ['title','description'];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
