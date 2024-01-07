<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Symptom extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'symptoms';

    protected $fillable = [
        'symptom_codes', 'symptoms'
    ];

}
