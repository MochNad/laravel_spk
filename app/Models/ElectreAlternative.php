<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectreAlternative extends Model
{
    use HasFactory;
    protected $table = 'electre_alternatives';
    protected $primaryKey = 'id_alternative';
    public $timestamps = false;

    protected $fillable = [
        'id_alternative',
        'name',
    ];
}
