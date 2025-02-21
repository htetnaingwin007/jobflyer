<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employer extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $table = 'employers';
    protected $fillable = [
        'id',
        'user_id',
        'phone',
        'address_id',
        'social_media',
        'cv',
        'skill',
        'workexperience',
        'bio',
        'image',
        'date_of_birth',
        'role',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
