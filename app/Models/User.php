<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'avatar',
        'birthday',
        'gender',
        'phone',
        'address',
        'intro',
        'role',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'user_course');
    }

    public function teacherCourses()
    {
        return $this->belongsToMany(Course::class, 'teacher_course');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function scopeTeachers($query)
    {
        return $query->where('role', config('roles.teacher'));
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
