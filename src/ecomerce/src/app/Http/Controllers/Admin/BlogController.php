<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$blogs = Blog::select('id', 'title', 'slug', 'status')
			->paginate(10)
			->onEachSide(2);

		return view('pages.admin.blog.index', [
			'blogs' => $blogs,
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		$blog = new Blog();
		$validationMessages = StoreBlogRequest::getValidationMessages();
		return view('pages.admin.blog.create', [
			'blog' => $blog,
			'validationMessages' => $validationMessages,
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreBlogRequest $request)
	{

		// $data = array_filter($request->all(), function($key) {
		// 	return $key !== 'meta' && $key !== '_token';
		// } ,ARRAY_FILTER_USE_KEY);

		$data = $request->all();

		$data['meta'] = json_encode($request->get('meta'));

		Blog::create($data);

		return Redirect::route('admin.blogs.index')->with('success', 'Blog created successfully.');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Blog $blog)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Blog $blog)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Blog $blog)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Blog $blog)
	{
		//
	}
}
