<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'parent_id',
        'user_id',
        'course_id',
        'time',
        'message',
        'rate'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeMain($query)
    {
        return $query->orderBy('parent_id', config('home.sort_high_to_low'))->limit(config('reviews.review_number_home'));
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function getPostedTimeAttribute()
    {
        return Carbon::parse($this['created_at'])->format(config('course.review_date'));
    }
}
