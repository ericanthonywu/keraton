<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Apr 2019 16:00:56 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $lat
 * @property string $long
 * @property string $nohp
 * @property string $profilepicture
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereNohp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedBy($value)
 * @property string|null $profile_picture
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereProfilePicture($value)
 */
class User extends Eloquent
{
    protected $casts = [
        "created_by"=>"int"
    ];
	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
//		'nickname',
		'email',
		'nohp',
		'password',
		'remember_token',
        'lat',
        'long',
        'profile_picture',
        "created_by"
	];
}
