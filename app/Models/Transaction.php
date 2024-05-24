<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'employee_id',
        'hours',
        'sum',
    ];

    public function scopeAllAnotherFormat($query)
    {
        return $query->select('employee_id', DB::raw('SUM(sum) as total_sum'))->groupBy('employee_id');
    }
}
