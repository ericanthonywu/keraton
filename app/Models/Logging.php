<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Apr 2019 16:00:56 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Logging
 *
 * @property int $id
 * @property string $nama
 * @property string $activity
 * @property int $level
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging whereActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Logging extends Eloquent
{
	protected $table = 'logging';

	protected $casts = [
		'level' => 'int'
	];

	protected $fillable = [
		'nama',
		'activity',
		'level'
	];
}
