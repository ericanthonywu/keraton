<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Apr 2019 16:00:56 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Banner
 *
 * @property int $id
 * @property string $nama
 * @property string $file
 * @property string $name_file
 * @property string $phone
 * @property string $coor_map
 * @property bool $confirmation
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereCoorMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereNameFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $url
 * @property string|null $lat
 * @property string|null $long
 * @property int $order
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereUrl($value)
 */
class Banner extends Eloquent
{
	protected $table = 'banner';

	protected $fillable = [
		'nama',
		'file',
		'name_file',
		'phone',
		'lat',
		'long',
        'url',
		'confirmation',
        'order'
	];
}
