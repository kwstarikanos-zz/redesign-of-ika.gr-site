<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Jan 2018 16:14:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class IndirectlyInsured
 * 
 * @property int $amka
 * @property string $name
 * @property string $surname
 * @property \Carbon\Carbon $birthdate
 * @property int $insured_afm
 * @property int $insured_amka
 * @property int $insured_ama
 * 
 * @property \App\Models\Insured $insured
 *
 * @package App\Models
 */
class IndirectlyInsured extends Eloquent
{
	protected $table = 'indirectly_insured';
	protected $primaryKey = 'amka';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'amka' => 'unsigned int',
		'insured_afm' => 'int',
		'insured_amka' => 'unsigned int',
		'insured_ama' => 'int'
	];

	protected $dates = [
		'birthdate'
	];

	protected $fillable = [
		'name',
		'surname',
		'birthdate',
		'insured_afm',
		'insured_amka',
		'insured_ama'
	];

	public function insured()
	{
		return $this->belongsTo(\App\Models\Insured::class, 'insured_afm')
					->where('insured.afm', '=', 'indirectly_insured.insured_afm')
					->where('insured.amka', '=', 'indirectly_insured.insured_amka')
					->where('insured.ama', '=', 'indirectly_insured.insured_ama');
	}
}
