<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class StudentInformation extends Model
{
    use HasFactory;

    protected $table = 'student_information';
    protected $primaryKey = 'student_information_id';
    protected $fillable = [
      'college_id',
      'form_data'
    ];

    public static function boot() {
      parent::boot();
      self::creating(function ($model) {
        $model->college_id = Auth::user()->college->college_id;
      });
    }
}
