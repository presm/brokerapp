<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policies extends Model
{
    protected $fillable = ['premium', 'policy_type'];
    use HasFactory;
}
