<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Vication extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'employee_id', 'class_id', 'vication_id'];

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
        return $this->BelongsTo(Vication::class);//->withPivot('status');
    }

}