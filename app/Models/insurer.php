<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insurer extends Model
{
    protected $fillable = ['insurer_name'];
    use HasFactory;
}
