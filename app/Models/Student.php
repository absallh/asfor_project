<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property mixed name
 * @property mixed email
 * @property mixed phone
 * @property mixed attendances
 * @property mixed present_count
 * @method static create(array $validated)
 * @method static WhereNotIn(string $string, $pluck)
 * @method static find(int|string $key)
 * @method static findorfail(int|string $key)
 * @method static count()
 */
class Student extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'first_name', 'father_name', 'mother_name', 'address', 'personuid', 'apply_date', 'call_date', 'call_ruslt', 'test_date', 'test_ruslt', 'join_date', 'leave_at'];
    protected $dates = ['apply_date', 'call_date', 'test_date', 'join_date', 'leave_at'];

    /**
     * @return BelongsToMany
     */
    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'subject_student')->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function attendances(): BelongsToMany
    {
        return $this->belongsToMany(Attendance::class)->withPivot('status');
    }

    /**
     * @return int
     */
    public function present_count(): int
    {
        return $this->belongsToMany(Attendance::class)->wherePivot('status', 1)->count();
    }

    /**
     * @return int
     */
    public function absent_count(): int
    {
        return $this->belongsToMany(Attendance::class)->wherePivot('status', 0)->count();
    }

    /**
     * @return HasMany
     */
    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class);
    }

    /**
     * @return HasMany
     */
    public function exceptions(): HasMany
    {
        return $this->hasMany(Exception::class);
    }

    /**
     * @return HasMany
     */
    public function student_vacations(): HasMany
    {
        return $this->hasMany(Student_Vacation::class);
    }
}
