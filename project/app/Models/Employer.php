<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Jan 2018 16:14:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Employer
 * 
 * @property int $e_id
 * @property string $business
 * @property int $business_afm
 * @property string $name
 * @property string $surname
 * 
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $hirings
 *
 * @package App\Models
 */
class Employer extends Eloquent
{
	protected $primaryKey = 'e_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'e_id' => 'int',
		'business_afm' => 'int'
	];

	protected $fillable = [
		'business',
		'business_afm',
		'name',
		'surname'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'e_id');
	}

	public function hirings()
	{
		return $this->hasMany(\App\Models\Hiring::class, 'h_e_id');
	}
}
