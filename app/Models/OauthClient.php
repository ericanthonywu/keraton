<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Apr 2019 16:00:56 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OauthClient
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $secret
 * @property string $redirect
 * @property bool $personal_access_client
 * @property bool $password_client
 * @property bool $revoked
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient wherePasswordClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient wherePersonalAccessClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereRedirect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthClient whereUserId($value)
 * @mixin \Eloquent
 */
class OauthClient extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'personal_access_client' => 'bool',
		'password_client' => 'bool',
		'revoked' => 'bool'
	];

	protected $hidden = [
		'secret'
	];

	protected $fillable = [
		'user_id',
		'name',
		'secret',
		'redirect',
		'personal_access_client',
		'password_client',
		'revoked'
	];
}
