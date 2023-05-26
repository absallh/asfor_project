<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exceptions extends Model
{
    use HasFactory;

    protected $fillable = ['reason', 'type', 'student_id', 'reciving_date', 'start_date', 'end_date'];
    protected $dates = ['reciving_date', 'start_date', 'end_date'];

    /**
     * @return BelongsTo
     */
    public function students(): BelongsTo
    {
        return $this->BelongsTo(Student::class, 'student_id');//->withPivot('status');
    }

}
