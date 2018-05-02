<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use Session;

class CategoryController extends Controller {
	public function __construct() {
		$this->middleware( 'auth' );
	}

	public function index() {

		$categories = Category::all();
		return view( 'categories.index' )->with( 'categories',$categories);
	}

	public function create(){

		return redirect()->route('categories.create');
	}


	public function store( Request $request ) {
		$this->validate( $request, array(
			'name' => 'required|max:255'
		) );
		$category       = new Category;
		$category->name = $request->name;
		$category->save();
		Session::flash( 'success', 'New Category has been created' );

		return redirect()->route( 'categories.index' );
	}

	public function edit( $id ) {
		Category::Findorfail( $id );

		return redirect()->route( 'categories.edit' );
	}
}
