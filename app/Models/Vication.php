<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vication extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'date'];

    protected $dates = ['date'];

    /**
     * @return HasMany
     */
    public function student_vications(): HasMany
    {
        return $this->hasMany(Student_Vication::class);
    }
}
