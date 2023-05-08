<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = ['phone', 'student_id'];

    /**
     * @return BelongsTo
     */
    public function students(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
