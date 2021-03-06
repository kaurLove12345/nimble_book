<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email','address', 'designation', 'education', 'description'];

    public function users()
    {
        return $this->belongsToMany(User::class,'profile_user', 'user_id', 'profile_id');
    }
}
