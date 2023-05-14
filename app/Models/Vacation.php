<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'date'];

    protected $dates = ['date'];

    /**
     * @return HasMany
     */
    public function student_vacations(): HasMany
    {
        return $this->hasMany(Student_Vacation::class);
    }
}
