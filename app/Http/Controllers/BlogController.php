<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Blog;
use App\Category;
use function Sodium\compare;

class BlogController extends Controller
{

	public function index(){

		$blogs=Blog::all();
		return redirect()->route('blogs.index');
	}

	public function create(){

		$cats= Category::all();
		return redirect()->route('blogs.index',compare('$cats'));
	}

	public function store(Request $request){

		$this->validate($request, array(
			'title' => 'required|max:100',
			'category_id' => 'required',
			'description' => 'required'
		));
		$blog = new Blog;
		$blog->title= $request->title;
		$blog->category_id= $request->category_id;
		$blog->description= $request->description;
		$blog->save();
		Session::flash('success', 'New Blog has been created.');
		return redirect()->route('blogs.index');
	}

	public function edit($id){

		Blog::findOrfail($id);
		return redirect()->route('blogs.edit');
	}

	public function dedtory($id){

		Blog::findOrfail($id);
		return redirect()->route('blogs.index');
	}

}
