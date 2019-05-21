<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedBy($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\sales
 *
 * @property int $id
 * @property int $unit
 * @property string $nama
 * @property string $no_hp
 * @property string $foto_ktp
 * @property string $foto_konsumen
 * @property string $email
 * @property int $email_st
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereEmailSt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereFotoKonsumen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereFotoKtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereNoHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $nohp
 * @property string|null $fotoktp
 * @property string|null $fotokonsumen
 * @property string|null $fotopasangan
 * @property string|null $fotonpwp
 * @property string|null $fotogaji
 * @property string|null $fotokerja
 * @property string|null $fotospt
 * @property int $paid_status
 * @property int|null $cancel_status
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereCancelStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereFotogaji($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereFotokerja($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereFotokonsumen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereFotoktp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereFotonpwp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereFotopasangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereFotospt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales whereNohp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\sales wherePaidStatus($value)
 */
	class sales extends \Eloquent {}
}

namespace App\Models{
/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedBy($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Banner
 *
 * @property int $id
 * @property string $nama
 * @property string $file
 * @property string $name_file
 * @property string $phone
 * @property string $coor_map
 * @property bool $confirmation
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereCoorMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereNameFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $url
 * @property string|null $lat
 * @property string|null $long
 * @property int $order
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereUrl($value)
 */
	class Banner extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Sale
 *
 * @property int $id
 * @property int $unit
 * @property string $nama
 * @property string $no_hp
 * @property string $foto_ktp
 * @property string $foto_konsumen
 * @property string $email
 * @property int $email_st
 * @property int $created_by
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereEmailSt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotoKonsumen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotoKtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereNoHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $nohp
 * @property string|null $fotoktp
 * @property string|null $fotokonsumen
 * @property string|null $fotopasangan
 * @property string|null $fotonpwp
 * @property string|null $fotogaji
 * @property string|null $fotokerja
 * @property string|null $fotospt
 * @property int $paid_status
 * @property int|null $cancel_status
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereCancelStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotogaji($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotokerja($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotokonsumen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotoktp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotonpwp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotopasangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereFotospt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale whereNohp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sale wherePaidStatus($value)
 */
	class Sale extends \Eloquent {}
}

namespace App\Models{
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
 * @property string $nama
 * @property int $lokasi_fix
 * @property string $lokasi_text
 * @property string $harga
 * @property int $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereHarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereLokasiFix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereLokasiText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereNama($value)
 */
	class Unit extends \Eloquent {}
}

namespace App\Models{
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
	class BannerParticipant extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Message
 *
 * @property int $id
 * @property string $nama
 * @property string $activity
 * @property int $level
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
 * @property string $lokasi
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereLokasi($value)
 * @property int $marketing
 * @property string $judul
 * @property string $pesan
 * @property int $push_notif
 */
	class Message extends \Eloquent {}
}

namespace App\Models{
/**
 * Class OauthRefreshToken
 *
 * @property string $id
 * @property string $access_token_id
 * @property bool $revoked
 * @property \Carbon\Carbon $expires_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken whereAccessTokenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthRefreshToken whereRevoked($value)
 * @mixin \Eloquent
 */
	class OauthRefreshToken extends \Eloquent {}
}

namespace App\Models{
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
	class OauthAuthCode extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Logging
 *
 * @property int $id
 * @property string $nama
 * @property string $activity
 * @property int $level
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging whereActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Logging whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Logging extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Admin
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string $email
 * @property int $emailst
 * @property string $token
 * @property int $level
 * @property string $username
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereEmailst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereUsername($value)
 * @mixin \Eloquent
 * @property int|null $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereCreatedBy($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
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
	class TablePaidhistory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class OauthAccessToken
 *
 * @property string $id
 * @property int $user_id
 * @property int $client_id
 * @property string $name
 * @property string $scopes
 * @property bool $revoked
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $expires_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereScopes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthAccessToken whereUserId($value)
 * @mixin \Eloquent
 */
	class OauthAccessToken extends \Eloquent {}
}

namespace App\Models{
/**
 * Class OauthPersonalAccessClient
 *
 * @property int $id
 * @property int $client_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthPersonalAccessClient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthPersonalAccessClient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthPersonalAccessClient query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthPersonalAccessClient whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthPersonalAccessClient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthPersonalAccessClient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OauthPersonalAccessClient whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class OauthPersonalAccessClient extends \Eloquent {}
}

namespace App\Models{
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
	class Token extends \Eloquent {}
}

namespace App\Models{
/**
 * Class LokasiUnit
 *
 * @property int $id
 * @property string $nama
 * @property string $activity
 * @property int $level
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $lokasi
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\LokasiUnit whereLokasi($value)
 */
	class LokasiUnit extends \Eloquent {}
}

namespace App\Models{
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
	class OauthClient extends \Eloquent {}
}

namespace App\Models{
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
	class UnitFile extends \Eloquent {}
}

