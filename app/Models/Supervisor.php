<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'email',
        'firstName',
        'middleName',
        'lastName',
        'school',
        'department',
        'status',
        'areaExpertise',
        'researchArea',
        'MajResearchArea',
        'MinResearchArea',
        'keywords',
    ];

    public function students(){
        return $this->hasMany(Student::class);
    }
}
