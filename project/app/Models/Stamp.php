<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Jan 2018 16:14:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Stamp
 * 
 * @property int $s_id
 * @property int $value
 * @property \Carbon\Carbon $date
 * @property int $hirings_h_e_id
 * @property \Carbon\Carbon $hirings_hire_date
 * @property int $hirings_insured_afm
 * @property int $hirings_insured_amka
 * @property int $hirings_insured_ama
 * 
 * @property \App\Models\Hiring $hiring
 *
 * @package App\Models
 */
class Stamp extends Eloquent
{
	protected $primaryKey = 's_id';
	public $timestamps = false;

	protected $casts = [
		'value' => 'int',
		'hirings_h_e_id' => 'int',
		'hirings_insured_afm' => 'int',
		'hirings_insured_amka' => 'unsigned int',
		'hirings_insured_ama' => 'int'
	];

	protected $dates = [
		'date',
		'hirings_hire_date'
	];

	protected $fillable = [
		'value',
		'date',
		'hirings_h_e_id',
		'hirings_hire_date',
		'hirings_insured_afm',
		'hirings_insured_amka',
		'hirings_insured_ama'
	];

	public function hiring()
	{
		return $this->belongsTo(\App\Models\Hiring::class, 'hirings_h_e_id')
					->where('hirings.h_e_id', '=', 'stamps.hirings_h_e_id')
					->where('hirings.hire_date', '=', 'stamps.hirings_hire_date')
					->where('hirings.insured_afm', '=', 'stamps.hirings_insured_afm')
					->where('hirings.insured_amka', '=', 'stamps.hirings_insured_amka')
					->where('hirings.insured_ama', '=', 'stamps.hirings_insured_ama');
	}
}
