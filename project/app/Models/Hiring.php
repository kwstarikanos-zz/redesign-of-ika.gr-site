<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Jan 2018 16:14:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Hiring
 * 
 * @property int $h_e_id
 * @property \Carbon\Carbon $hire_date
 * @property int $insured_afm
 * @property int $insured_amka
 * @property int $insured_ama
 * @property string $jobtitle
 * @property \Carbon\Carbon $contract_expiry
 * 
 * @property \App\Models\Employer $employer
 * @property \App\Models\Insured $insured
 * @property \Illuminate\Database\Eloquent\Collection $stamps
 *
 * @package App\Models
 */
class Hiring extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'h_e_id' => 'int',
		'insured_afm' => 'int',
		'insured_amka' => 'unsigned int',
		'insured_ama' => 'int'
	];

	protected $dates = [
		'hire_date',
		'contract_expiry'
	];

	protected $fillable = [
		'jobtitle',
		'contract_expiry'
	];

	public function employer()
	{
		return $this->belongsTo(\App\Models\Employer::class, 'h_e_id');
	}

	public function insured()
	{
		return $this->belongsTo(\App\Models\Insured::class, 'insured_afm')
					->where('insured.afm', '=', 'hirings.insured_afm')
					->where('insured.amka', '=', 'hirings.insured_amka')
					->where('insured.ama', '=', 'hirings.insured_ama');
	}

	public function stamps()
	{
		return $this->hasMany(\App\Models\Stamp::class, 'hirings_h_e_id');
	}
}
