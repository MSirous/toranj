<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarsGroup extends Model
{
	
	protected $fillable = ['name'];
    protected $table = "cars_group";

    public function cars()
    {
    	return $this->hasMany('App\Cars','cgroup_id');
    }
    
}
