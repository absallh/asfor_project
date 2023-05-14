<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Vacation extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'employee_id', 'class_id', 'vacation_id'];

    /**
     * @return BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->BelongsTo(Student::class);//->withPivot('status');
    }

    /**
     * @return BelongsTo
     */
    public function vication(): BelongsTo
    {
        return $this->BelongsTo(Vacation::class);//->withPivot('status');
    }

}