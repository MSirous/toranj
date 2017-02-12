<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;

class CarsController extends Controller
{
//
    private $limit      =12;
    private $rules      = [
    'cgroup_id'         => ['required'],
    'company'           => ['required'],
    'model'             => ['required'],
    'date_birth'        => ['required'],
    'price'             => ['required'],
    'installment_price' => ['required'],
    'installment'       => ['required'],
    'work'              => ['required'],
    'gearbox'           => ['required'],
    'tires'             => ['required'],
    'color'             => ['required'],
    'remove_color'      => ['required'],
    'state'             => ['required'],
    'phone'             => ['required'],
    'info'              => ['required'],
   
    ]; 

    private $upload_dir =  'public/uploads' ;



    public function __construct()
    {
        $this->upload_dir = base_path() .'/' . $this->upload_dir;
    }


    public function autocomplete(Request $request)
    {
        if ($request->ajax())
        {
            return Cars::select(['id','model as value'])->where(function($query) use ($request)
            {
               
                    if (($term = $request->get ('term'))) 
                    {
                        $keywords = '%' . $term . '%';
                        $query->orWhere('model', 'LIKE' , '%'. $term. '%' );
                        $query->orWhere('company', 'LIKE' , '%'. $term. '%' );
                        $query->orWhere('date_birth', 'LIKE' , '%'. $term. '%' );
                        $query->orWhere('color', 'LIKE' , '%'. $term. '%' );
                    }
            })
                        ->orderBy('model' , 'asc')
                        ->take(4)
                        ->get(); 
        }
    }


    // Index method and Show All data
    public function index(Request $request)
    {
    
        $cars = Cars::where(function($query) use ($request){
                    if ($cgroup_id = ($request->get('cgroup_id')))
                    {
                        $query->where('cgroup_id', $cgroup_id);
                    }
                    if (($term = $request->get ('term'))) {
                        $keywords = '%' . $term . '%';
                        $query->orWhere('model', 'LIKE' , '%'. $term. '%' );
                        $query->orWhere('company', 'LIKE' , '%'. $term. '%' );
                        $query->orWhere('date_birth', 'LIKE' , '%'. $term. '%' );
                        $query->orWhere('color', 'LIKE' , '%'. $term. '%' );
                    }
                 })
                        ->orderBy('id' , 'dec')
                        ->paginate($this->limit); 



        return view('cars.index' , compact('cars'));
    }


    // Create New Cars and show fields
    public function create()
    {
        return view("cars.create");
    }


    // Edit Files
    public function edit($id)
    {
        $cars = Cars::find($id);
        return view("cars.edit" , compact('cars'));
    }


    // Save data On the Database 
    public function store(Request $request)
    {

        $this->validate($request, $this->rules);

        $data = $this->getRequest($request);
        Cars::create($data);
        return redirect('cars')->with('message', 'Cars informations are save!');
    }


    // 
    private function getRequest(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('photo'))
        {
            $photo       = $request->file('photo');
            $fileName    = $photo->getClientOriginalName();
            $destination = $this->upload_dir;
            $photo->move($destination , $fileName);     
            $data['photo'] = $fileName;
        }
        return $data;
    }


// Save data On the Database 
    public function update($id, Request $request)
    {

        $this->validate($request, $this->rules);

        $cars = Cars::find($id);
        $oldPhoto = $cars->photo;
        $data = $this->getRequest($request);

        $cars->update($data);

        if ($oldPhoto !== $cars->photo) 
        {
            $this->removePhoto($oldPhoto);
        }

        return redirect('cars')->with('message', 'Cars information are Update!');        

    }


    public function destroy($id)
    {
        $cars = Cars::find($id);
        $cars->delete();
        $this->removePhoto($cars->photo);

        return redirect('cars')->with('message', 'Car is Deleted.. ! ');

    }


    public function removePhoto($photo)
    {
        if (! empty($photo)) {
            $file_path = $this->upload_dir . '/' . $photo;

            if (file_exists($file_path)) unlink($file_path);
        }
    }









}
