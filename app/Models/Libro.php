<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $dates = ['deleted_at'];
    public $timestamps = false;
    protected $guarded = []; // fix "Add [_token] to fillable property"

}
