<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yubraj extends Model
{
    public function index()
    {
        return $this->hasMany('App\Models\Govinda');
    }
}
