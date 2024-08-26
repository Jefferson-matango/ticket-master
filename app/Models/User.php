<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\sys\Branch;
use App\Models\sys\Rol;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'sys_users';

    protected $guarded = [
        'id',
        '_branch',
        'created_at',
        'updated_at',
        'deleted_at',
        'email_verified_at',
        'remember_token',
    ];

    public function branch(): BelongsTo{
        return $this->belongsTo(Branch::class, '_branch');
    }

    public function rols(): BelongsToMany {
        return $this->belongsToMany(Rol::class, 'sys_users_rols', '_user', '_rol');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
