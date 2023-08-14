<?php

namespace App\Traits\Validations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait CommonRules
{

	public function commonRules(String $table)
	{
		return [
			// 'slug' => ['required', 'string', 'unique:' . $model->getTable() . ',slug,'],
			'slug' => ['required', 'string', 'unique:' . $table . ',slug,'],
			// 'slug' => ['required', 'string'],
			'status' => ['required', 'string', 'in:published,unpublished'],
		];
	}

	public function prepareSlug()
	{
		return Str::slug($this->slug);
	}

	public static function commonMessages()
	{
		return [
			'slug.required' => 'Slug Field is required',
		];
	}
}
