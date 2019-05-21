<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Apr 2019 16:00:56 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Message
 *
 * @property int $id
 * @property int $marketing
 * @property int $push_notif
 * @property int $created_by
 * @property string judul
 * @property string pesan
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereMarketing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message wherePesan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message wherePushNotif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereCreatedBy($value)
 * @property string $judul
 * @property string $pesan
 */
class Message extends Eloquent
{
    protected $table = 'message';

    protected $casts = [
        'marketing' => 'int',
        'push_notif' => 'int',
        'created_by' => 'int'
    ];

    protected $fillable = [
        'marketing',
        'judul',
        'pesan',
        'push_notif',
        'created_by'
    ];
    public $timestamps = true;
}
