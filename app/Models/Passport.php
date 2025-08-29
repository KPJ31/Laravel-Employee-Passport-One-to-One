<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $fillable = [
        'passnum',
        'idate',
        'edate',
        'employee_id',
    ];

    public function passport() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
