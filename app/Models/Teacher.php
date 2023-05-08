<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'join_date'];
    protected $dates = ['join_date'];

    /**
     * @return belongsToMany
     */
    public function subjects(): belongsToMany
    {
        return $this->belongsToMany(Subject::class, 'teacher_id');
    }
}
