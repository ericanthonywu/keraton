<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Apr 2019 16:00:56 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BannerParticipant
 *
 * @property int $id
 * @property int $banner
 * @property int $user
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BannerParticipant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BannerParticipant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BannerParticipant query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BannerParticipant whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BannerParticipant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BannerParticipant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BannerParticipant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BannerParticipant whereUser($value)
 * @mixin \Eloquent
 */
class BannerParticipant extends Eloquent
{
	protected $table = 'banner_participant';

	protected $casts = [
		'banner' => 'int',
		'user' => 'int'
	];

	protected $fillable = [
		'banner',
		'user'
	];
}
