<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectreEvaluation extends Model
{
    protected $table = 'electre_evaluations';
    protected $primaryKey = ['id_alternative', 'id_criteria'];
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'id_alternative',
        'id_criteria',
        'value',
    ];

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}

