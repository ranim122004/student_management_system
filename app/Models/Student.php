<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
       use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'date_of_birth',
        'gender',
        'phone_number',
        'address',
    ];
    public function grades()
{
    return $this->hasMany(Grade::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}

public function courses()
{
    return $this->hasMany(Course::class);
}

}
