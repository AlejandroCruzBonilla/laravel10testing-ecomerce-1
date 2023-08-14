<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blog extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'title',
		'body',
		'references',
		'author',

		'slug',
		'status',
		
		'meta_tags',
		'meta_tags_og',
		'schema_org',
	];

	function tags(): BelongsToMany
	{
		return $this->belongsToMany(Tag::class)->withTimestamps();
	}
}
