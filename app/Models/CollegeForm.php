<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CollegeForm extends Model
{
  use HasFactory;

  protected $table = 'college_forms';
  protected $primaryKey = 'college_form_id';
  protected $fillable = [
    'college_id',
    'form_data',
    'type'
  ];

  protected $visible = ['college_id', 'form_data', 'type'];

  public function scopefilterByCollegeId($query) {
    $query->where('college_id', Auth::user()->college->college_id);
  }

  public function college() {
    return $this->belongsTo(College::class, 'college_id');
  }
}
