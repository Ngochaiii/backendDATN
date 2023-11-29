<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'is_active',
        'role'

    ];
    public function isAdmin(): bool
    {
        return in_array($this->role, [
            1,
        ]);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'is_supper_admin',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    public function wishlist()
    {
        return $this->hasMany(Wishlists::class, 'id');
    }
    const ROLE_ADMIN = 1;
    const ROLE_USER = 0;
    const ROLES = [
        self::ROLE_ADMIN => 'Quản trị',
        self::ROLE_USER => 'Người dùng',
    ];

    public function getRoleNameAttribute()
    {
        return self::ROLES[$this->role] ?? '#';
    }

    public function getIsEmployeeAttribute()
    {
        return self::ROLE_USER == $this->role;
    }

    public function getIsAdminAttribute()
    {
        return self::ROLE_ADMIN == $this->role;
    }

    public function getIsSuperAdminAttribute()
    {
        return $this->is_supper_admin;
    }
    public function product()
    {
        return $this->belongsTo(TicketComments::class, 'id');
    }
    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }
    public function vouchers()
    {
        return $this->hasManyThrough(Voucher::class, UserVoucher::class);
    }
}
