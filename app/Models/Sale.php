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
 * @property string|null $fotokonsumen
 * @property string|null $fotopasangan
 * @property string|null $fotonpwp
 * @property string|null $fotogaji
 * @property string|null $fotokerja
 * @property string|null $fotospt
 * @property int $paid_status
 * @property int|null $cancel_status
 * @property int $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotokonsumen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotoktp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereNohp($value)
 */
class Sale extends Eloquent
{
    protected $hidden = [
        'sales_id',
        'pdf_name',
    ];
    protected $casts = [
        'created_by'=>'int',
        'status'=>'int',
        'sales_id'=>'int',
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
		'fotokonsumen',
		'fotopasangan',
        'fotonpwp',
        'fotogaji',
        'fotokerja',
        'fotospt',
        'status',
        'pdf_name',
        'created_by'
	];
}
