<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Socio extends Model
{
    use HasFactory;
    protected $dates = ['deleted_at'];
    public $timestamps = false;
    protected $guarded = []; // fix "Add [_token] to fillable property"
    public function  getEdadAttribute($value){
        return Carbon::parse($this->f_nacimiento)->age;
    }
}