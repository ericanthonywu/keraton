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
 * @property int $unitID
 * @property string $image
 * @property int $order
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UnitFile whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UnitFile whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UnitFile whereUnitID($value)
 */
class UnitFile extends Eloquent
{
    protected $table = 'unit_file';

    protected $casts = [
        'userID' => 'int',
        'order' =>'int'
    ];

    protected $fillable = [
        'unitID',
        'image',
        'order'
    ];
}
