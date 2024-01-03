<?php

// app\Models\User.php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
         'email', 
         'phone', 
         'gender',
         'image',
         'password',
         'role_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function isStudent()
    {
        return $this->role->name === 'student';
    }

    public function isInstructor()
    {
        return $this->role->name === 'instructor';
    }
    public function instructor()
    {
        return $this->hasOne(Instructor::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }
}
