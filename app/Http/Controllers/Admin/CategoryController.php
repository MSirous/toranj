<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Request;

class CategoryController extends AdminController {

    public function index()
    {
        $items = App\Models\Category::root()->getDescendants();

        return view('admin.categories.index',compact('items'));
    }

    public function store()
    {
        $parent_id = Request::get('parent_id', null);
        $parent = Category::where('id', $parent_id)->first();

        // if we no not find the parent we add it on the root.
        if (!$parent) {
            $parent = Category::Root();
        }

        // if there is no root node we create one
        if (!$parent) {
            $parent = Category::create(['title' => 'root']);
        }



        $parent->children()->create(Request::all());
        return redirect()->to('admin/category');
	}

    public function create()
    {
        $parent_id = Request::get('parent');

        return view('admin.categories.create',['parent_id',$parent_id]);
	}
	
	public function edit($id)
    {
        $node = Category::where('id', $id)->first();
        $node->title = Request::get('title');
        $node->save();

        \Session::flash('flashMessageText', 'با موفقیت ثبت شد.');
        \Session::flash('flashMessageClass', 'success');

        return redirect()->to('admin');
    }

	public function getDelete($id) {
		$node = Category::where('id', $id)->first();
		if ($node->delete()) {
			\Session::flash('flashMessageText', 'با موفقیت حذف شد.');
			\Session::flash('flashMessageClass', 'success');
		}
		return \Redirect::back();
	}

}