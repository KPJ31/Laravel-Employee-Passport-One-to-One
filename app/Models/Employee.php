<?php

namespace App\Models;

use App\Models\Passport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'email',
        'address',
    ];

    public function employee(): HasOne {
        return $this->hasOne(Passport::class);
    }
}
