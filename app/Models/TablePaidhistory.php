<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 Apr 2019 16:00:56 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TablePaidhistory
 *
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TablePaidhistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TablePaidhistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TablePaidhistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TablePaidhistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TablePaidhistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TablePaidhistory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TablePaidhistory extends Eloquent
{
	protected $table = 'table_paidhistory';
}
