<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnologieTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['locale', 'description', 'tech_id'];
}
