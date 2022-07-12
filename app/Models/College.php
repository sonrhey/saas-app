<?php

namespace App\Models;

use App\Http\Constants\FormType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $primaryKey = 'college_id';
    protected $fillable = [
      'name',
      'address',
      'registered_name',
      'owner',
      'user_id',
      'is_college_form_created',
      'is_student_form_created'
    ];

    protected $visible = ['college_id', 'name', 'address', 'owner', 'registered_name', 'is_college_form_created', 'is_student_form_created'];

    public function user() {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeisFormCreated($query, $type) {
      switch ($type) {
        case FormType::COLLEGE:
          $query->where('is_college_form_created', false);
          break;
        case FormType::STUDENT:
          $query->where('is_student_form_created', false);
          break;
      }
    }

    public function college_form() {
      return $this->hasOne(CollegeForm::class);
    }
}
