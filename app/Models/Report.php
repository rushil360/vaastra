<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table ="inward";
    protected $primaryKey="id";
    public function office()
    {
       return $this->hasOne('App\Models\Office','id','office_id');
    }

    public function vehicle()
    {
       return $this->hasOne('App\Models\Vehicle','id','vehicle_id');
    }

    public function inward()
    {
       return $this->hasOne('App\Models\Inward','id','id');
    }
}
