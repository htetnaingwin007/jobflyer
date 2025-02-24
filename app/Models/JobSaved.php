<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobSaved extends Model
{
    
    use HasFactory;
    use SoftDeletes;

    protected $table = 'job_saveds';
    protected $fillable = [
        
        'job_id',
        'user_id',
        

        
    ];

    public $timestamps = true;

    public function user() {
        return $this->belongsTo(User::class);
    }
}
