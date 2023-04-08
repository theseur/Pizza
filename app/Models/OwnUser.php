<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnUser extends Model
{
    protected $table = 'category';
    use HasFactory;
    
    protected $fillable = ['pname', 'price'];
}
