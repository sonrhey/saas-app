<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'student_id';
    protected $fillable = [
      'name',
      'address',
      'college_id',
      'user_id'
    ];

    protected $visible = ['student_id', 'name', 'address'];

    public function scopefindByCollegeId($query) {
      $query->where('college_id', Auth::user()->college->college_id);
    }
}
