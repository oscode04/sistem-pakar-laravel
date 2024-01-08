<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Diseases;

class Solution extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'solutions';
    protected $primaryKey = 'id_solution';

    protected $fillable = [
        'solution_code', 'solution'
    ];

    // relasi dengan table pivot
    public function diseases()
    {
        return $this->belongsToMany(Disease::class, 'disease_solution', 'id_solution', 'id_disease');
    }  
}
