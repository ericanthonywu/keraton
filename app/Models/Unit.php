<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Apr 2019 16:00:56 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Unit
 *
 * @property int $id
 * @property string $nama_unit
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereNamaUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $nama
 * @property int $lokasi_fix
 * @property string $lokasi_text
 * @property string $harga
 * @property int $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereHarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereLokasiFix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereLokasiText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereNama($value)
 */
class Unit extends Eloquent
{
	protected $table = 'unit';

    protected $casts = [
        'id' => 'int',
        'lokasi_fix' => 'int'
    ];

	protected $fillable = [
	    'id',
		'nama',
        'lokasi_fix',
        'lokasi_text',
        'foto',
        'harga',
		'description',
        'created_by'
	];
}
