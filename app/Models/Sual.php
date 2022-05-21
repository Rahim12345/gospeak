<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sual extends Model
{
    use HasFactory;

    protected $table = 'suals';

    protected $fillable = [
      'name',
      'telno',
      'ip',
    ];
}
