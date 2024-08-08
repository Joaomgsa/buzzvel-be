<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Trip extends Model
{
    protected $table = 'trips';
    protected $fillable = ['start_date', 'end_date'];

    public function location(): HasMany
    {
        return $this->hasMany(Location::class);
    }

    public function plan(): HasOne
    {
        return $this->hasOne(Plan::class);
    }
}
