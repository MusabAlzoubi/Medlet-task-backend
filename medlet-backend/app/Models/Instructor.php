<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'specialty',
         'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
