<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supervisor;

class Student extends Model
{
    use HasFactory;

    /**
     *  The attributes that are mass assignable
     * @var array<int, string>
     */

    protected $fillable = [
        'student_id',
        'email',
        'firstName',
        'middleName',
        'lastName',
        'school',
        'department',
        'program',
        'thesisTitle',
        'researchArea',
        'isAssigned',
        'supervisor_id',
        'keywords',
    ];


    public function supervisor(){
        return $this->belongsTo(Supervisor::class);
    }
}
