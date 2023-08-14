<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'name',
		'email',
		'password',
	];

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
		'password' => 'hashed',
	];

	function roles(): BelongsToMany
	{
		return $this->belongsToMany(Role::class)->withTimestamps();
	}

	function authorizeRoles($roles)
	{
		abort_unless($this->hasAnyRole($roles), 401);
		return true;
	}

	function hasAnyRole($roles = null): bool
	{
		if (empty($roles)) return true;
		if (is_array($roles)) {
			return $this->roles()->whereIn('name', $roles)->get()->count() > 0 ? true : false;
		} else {
			return $this->hasRole($roles);
		}
		return false;
	}

	public function hasRole(string $role): bool
	{
		return $this->roles()->where('name', $role)->first() ? true : false;
	}
}
