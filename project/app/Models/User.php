<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Jan 2018 16:14:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Employer $employer
 * @property \Illuminate\Database\Eloquent\Collection $insureds
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'username',
		'email',
		'password',
		'remember_token'
	];

	public function employer()
	{
		return $this->hasOne(\App\Models\Employer::class, 'e_id');
	}

	public function insureds()
	{
		return $this->hasMany(\App\Models\Insured::class, 'users_id');
	}
}
