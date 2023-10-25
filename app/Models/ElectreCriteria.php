<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectreCriteria extends Model
{
    use HasFactory;
    protected $table = 'electre_criterias';
    protected $primaryKey = 'id_criteria';
    public $timestamps = false;

    protected $fillable = [
        'id_criteria',
        'criteria',
        'weight',
    ];
}
