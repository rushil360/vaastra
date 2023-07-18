<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $table ="vehicle";
    protected $primaryKey="id";

    public function office()
    {
       return $this->hasOne('App\Models\Office','id','office_id');
    }
}
