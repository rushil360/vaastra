<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inward extends Model
{

    use HasFactory;   
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    
     
    protected $table ="inward";
    protected $primaryKey="id";
    protected $fillable = ['office_id','vehicle_id','status'];

    public function office()
    {
       return $this->hasOne('App\Models\Office','id','office_id');
    }

    public function vehicle()
    {
       return $this->hasOne('App\Models\Vehicle','id','vehicle_id');
    }
    public static function countRecords()
    {
        return self::count();
    }
}      
