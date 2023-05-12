<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'join_date', 'emp_type', 'salary', 'shift_hours', 'join_date'];
    protected $dates = ['join_date'];

    /**
     * @return belongsToMany
     */
    public function subjects(): belongsToMany
    {
        return $this->belongsToMany(Subject::class);
    }
}
