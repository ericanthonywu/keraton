<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Apr 2019 16:00:56 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Token
 *
 * @property int $id
 * @property string $token
 * @property int $user
 * @property \Carbon\Carbon $expire
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Token newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Token newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Token query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Token whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Token whereExpire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Token whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Token whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Token whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Token whereUser($value)
 * @mixin \Eloquent
 * @property string $token_old
 * @property string $token_new
 * @property int $os
 * @property string $devicetoken
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Token whereDevicetoken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Token whereOs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Token whereTokenNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Token whereTokenOld($value)
 */
class Token extends Eloquent
{
	protected $table = 'token';

	protected $casts = [
		'user' => 'int'
	];

	protected $dates = [
		'expire'
	];

	protected $hidden = [
		'token_new','token_old',
	];

	protected $fillable = [
		'token_new',
		'token_old',
        'os',
        'devicetoken',
		'user',
		'expire'
	];
}
