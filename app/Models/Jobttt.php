<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;



class Jobttt extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'jobttts';
    protected $fillable = [
        'id',
        'job_title',
        'job_region_id',
        'company_id',
        'job_type',
        'vacancy',
        'experience',
        'salary',
        'gender',
        'application_deadline',
        'job_description',
        'responsibilities',
        'education_experience',
        'other_benefits',
        'image',
        'category_id',
    ];

    public $timestamp = true;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class,'job_region_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

