<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$roles = Role::select('id', 'name', 'description')
			->paginate(10)
			->onEachSide(2);
		return view('pages.admin.role.index', [
			'roles' => $roles,
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Role $role)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Role $role)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Role $role)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Role $role)
	{
		//
	}
}
