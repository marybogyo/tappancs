<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tappancs extends Model
{
    use HasFactory;
    protected $primaryKey = 'tappancs_id';
    protected $fillable = [
        'nev',
        'fajta',
        'foot',
        'user_id'
    ];
}
