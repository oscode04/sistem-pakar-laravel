<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diseases extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'diseases';

    protected $fillable = [
        'disease_name', 'disease_cause', 'disease_detail'
    ];

}
