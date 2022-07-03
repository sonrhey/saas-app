<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $primaryKey = 'domain_id';
    protected $fillable = [
      'user_id',
      'application_role_id',
      'url',
      'slug'
    ];

    public function scopefindByUserId($query, $user_id) {
      $query->where('user_id', $user_id);
    }
}
