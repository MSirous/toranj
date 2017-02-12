<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $primaryKey = 'id';

	protected $fillable = [
	'cgroup_id','company','model','date_birth','price','installment_price','installment','work','gearbox','tires','color',
	'remove_color','state','phone','info','photo','name'
	];

	public function carsGroup()
	{
		return $this->belongsTo('App\CarsGroup');
	}
	
}
