<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarsGroup;

class GroupsController extends Controller
{
    //
    public function store(Request $request)
    {
    	$this->validate($request, [
    		// 'name' => ['required', 'unique:groups']
    		'name' => 'required|unique:cars_group'
    		]);
    	return CarsGroup::create($request->all());

    	//echo "1";
    }
}
