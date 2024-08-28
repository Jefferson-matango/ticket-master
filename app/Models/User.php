<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\sys\Account;
use App\Models\sys\Branch;
use App\Models\sys\Privilege;
use App\Models\sys\Rol;

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
        '_created_by',
        '_modified_by',
        'created_at',
        'updated_at',
        'deleted_at',
        'delete',
        'email_verified_at',
        'remember_token',
    ];

    public function branch(): BelongsTo{
        return $this->belongsTo(Branch::class, '_branch');
    }

    public function rols(): BelongsToMany {
        return $this->belongsToMany(Rol::class, 'sys_users_rols', '_user', '_rol');
    }

    public function createdByAccountUser(): BelongsTo {
        return $this->belongsTo(Account::class, '_created_by', 'id');
    }
    public function modifiedByAccountUser(): BelongsTo {
        return $this->belongsTo(Account::class, '_modified_by', 'id');
    }
    
    public function createdByBranchUser(): BelongsTo {
        return $this->belongsTo(Branch::class, '_created_by', 'id');
    }
    public function modifiedByBranchUser(): BelongsTo {
        return $this->belongsTo(Branch::class, '_modified_by', 'id');
    }

    public function createdByPrivilegeUser(): BelongsTo {
        return $this->belongsTo(Privilege::class, '_created_by', 'id');
    }
    public function modifiedByPrivilegeUser(): BelongsTo {
        return $this->belongsTo(Privilege::class, '_modified_by', 'id');
    }

    public function createdByRolUser(): BelongsTo {
        return $this->belongsTo(Rol::class, '_created_by', 'id');
    }
    public function modifiedByRolUser(): BelongsTo {
        return $this->belongsTo(Rol::class, '_modified_by', 'id');
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
