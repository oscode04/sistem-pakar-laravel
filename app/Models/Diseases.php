<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Symptom;
use App\Models\Solution;

class Diseases extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'diseases';
    protected $primaryKey = 'id_disease';

    protected $fillable = [
        'disease_code', 'disease_name', 'disease_cause', 'disease_detail'
    ];

    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class, 'disease_symptom', 'id_disease', 'id_symptom');
    }

    public function solutions()
    {
        return $this->belongsToMany(Solution::class, 'disease_solution', 'id_disease', 'id_solution');
    }
}
