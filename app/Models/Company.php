<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'companies';
    protected $fillable = [
        'id',
        'user_id',
        'company_name',
        'about_company',
        'industry',
        'company_website',
        'total_employee'

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
}
