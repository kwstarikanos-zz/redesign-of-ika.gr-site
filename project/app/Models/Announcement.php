<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 13 Jan 2018 16:14:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Announcement
 * 
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $tag
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Announcement extends Eloquent
{
	protected $fillable = [
		'title',
		'content',
		'tag'
	];
}
