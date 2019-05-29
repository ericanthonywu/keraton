<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Apr 2019 16:00:56 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Sale
 *
 * @property string|null $nama
 * @property string|null $nohp
 * @property string|null $email
 * @property string|null $fotoktp
 * @property string|null $fotoktppasangan
 * @property string|null $fotokonsumen
 * @property string|null $fotopasangan
 * @property string|null $fotonpwp
 * @property string|null $fotogaji
 * @property string|null $fotokerja
 * @property string|null $fotospt
 * @property int $paid_status
 * @property string|null $pdf_name
 * @property int $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotokonsumen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotoktp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereNohp($value)
 * @property int $sales_id
 * @property int $id
 * @property int $unit
 * @property int $status
 * @property int $harga
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotogaji($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotokerja($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotoktppasangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotonpwp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotopasangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotospt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereHarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale wherePdfName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereSalesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Sale extends Eloquent
{
    protected $hidden = [
        'sales_id',
    ];
    protected $casts = [
        'created_by'=>'int',
        'status'=>'int',
        'sales_id'=>'int',
        'harga'=>'int',
        'id'=>'int'
    ];
	protected $fillable = [
	    'sales_id',
	    'id',
		'unit',
		'nama',
		'nohp',
		'email',
		'fotoktp',
		'fotoktppasangan',
		'fotokonsumen',
		'fotopasangan',
        'fotonpwp',
        'fotogaji',
        'fotokerja',
        'fotospt',
        'status',
        'pdf_name',
        'harga',
        'created_by'
	];
}
