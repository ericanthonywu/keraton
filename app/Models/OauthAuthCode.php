<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Apr 2019 16:00:56 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OauthAuthCode
 *
 * @property string $id
 * @property int $user_id
 * @property int $client_id
 * @property string $scopes
 * @property bool $revoked
 * @property \Carbon\Carbon $expires_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode whereScopes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAuthCode whereUserId($value)
 * @mixin \Eloquent
 */
class OauthAuthCode extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'client_id' => 'int',
		'revoked' => 'bool'
	];

	protected $dates = [
		'expires_at'
	];

	protected $fillable = [
		'user_id',
		'client_id',
		'scopes',
		'revoked',
		'expires_at'
	];
}
