<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Jan 2018 16:14:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Insured
 * 
 * @property int $users_id
 * @property int $afm
 * @property int $amka
 * @property int $ama
 * @property bool $retired
 * @property string $name
 * @property string $surname
 * 
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $hirings
 * @property \Illuminate\Database\Eloquent\Collection $indirectly_insureds
 *
 * @package App\Models
 */
class Insured extends Eloquent
{
	protected $table = 'insured';
	public $incrementing = false;
	public $timestamps = false;

    protected $casts = [
        'users_id' => 'int',
        'afm' => 'int',
        'amka' => 'unsigned int',
        'ama' => 'int',
        'retired' => 'bool'
    ];

    protected $fillable = [
        'users_id',
        'afm',
        'amka',
        'ama',
        'retired',
        'name',
        'surname'
    ];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'users_id');
	}

	public function hirings()
	{
		return $this->hasMany(\App\Models\Hiring::class, 'insured_afm');
	}

	public function indirectly_insureds()
	{
		return $this->hasMany(\App\Models\IndirectlyInsured::class, 'insured_afm');
	}
}
