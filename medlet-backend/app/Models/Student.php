<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'full_name_arabic',
        'full_name_english',
        'university_id',
        'gpa',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
