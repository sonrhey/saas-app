<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationRole extends Model
{
    use HasFactory;

    protected $primaryKey = 'application_role_id';
    
    protected $fillable = [
      'role_code',
      'role_name'
    ];
}
