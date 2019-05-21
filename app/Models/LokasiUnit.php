<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Apr 2019 16:00:56 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LokasiUnit
 *
 * @property int $id
 * @property string $nama
 * @property string $activity
 * @property int $level
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $lokasi
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereLokasi($value)
 */
class LokasiUnit extends Eloquent
{
	protected $table = 'lokasi_unit';

	protected $fillable = [
		'lokasi',
	];
}
