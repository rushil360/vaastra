<?php

namespace App\Rules;

use App\Models\Inward;
use App\Models\Office;
use Illuminate\Contracts\Validation\Rule;

class ValidateAllowVehicle implements Rule
{
    public function __construct($type)
    {
        $this->type = $type;
    }

    public function passes($attribute, $value)
    {
        if($this->type == 'office_id'){
            $office = Office::where('id',$value)->where('status',1)->first();
            $inward = Inward::where('office_id',$value)->where('status',1)->get();
            if(!empty($office)){
                if(count($inward) >= $office->v_allowed){
                    return false;
                }else{
                    return true;
                }
            }
        }
        if($this->type == 'vehicle_id'){
            $office_id = request()->get('office_id');
            $vehicle_id = request()->get('vehicle_id');

            $inward = Inward::where('office_id',$office_id)->where('vehicle_id',$vehicle_id)->where('status',1)->first();
            if(!empty($inward)){
                return false;
            }else{
                return true;
            }
        }

    }

    public function message()
    {
        if($this->type == 'office_id'){
            return 'Allow vehicle limit reached';
        }
        if($this->type == 'vehicle_id'){
            return 'You are already In';
        }
    }
}
