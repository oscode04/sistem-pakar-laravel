<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Diseases;

class Symptom extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'symptoms';
    protected $primaryKey = 'id_symptoms';

    protected $fillable = [
        'symptom_codes', 'symptoms'
    ];

    // relasi dengan table pivot
    public function diseases()
    {
        return $this->belongsToMany(Disease::class, 'disease_symptom', 'id_symptom', 'id_disease');
    }
}
