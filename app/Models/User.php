<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\softDeletes;


class User extends Authenticatable
{
    use HasApiTokens;
    //use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    use SoftDeletes;

    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    // One to Many
    public function appointment()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasMany('App\Models\Operational\Appointment', 'user_id');
    }

    // One to Many
    public function detail_user()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasOne('App\Models\ManagementAccess\DetailUser', 'user_id');
    }
    // One to Many
    public function role_user()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasMany('App\Models\ManagementAccess\RoleUser', 'user_id');
    }
}
