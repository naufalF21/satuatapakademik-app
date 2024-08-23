<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'mentor_id',
        'name',
        'slug',
        'about',
        'path_trailer',
        'thumbnail',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function course_videos()
    {
        return $this->hasMany(CourseVideo::class);
    }

    public function course_keypoints()
    {
        return $this->hasMany(CourseKeypoint::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'course_students');
    }
}
