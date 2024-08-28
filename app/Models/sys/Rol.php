<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\User;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'sys_rols';

    protected $fillable = [
        'name',
        'description',
        'state',
        'delete',
        'created_by',
        'modified_by',
    ];

    public function privileges(): BelongsToMany {
        return $this->belongsToMany(Privilege::class, 'sys_rols_privileges', '_rol', '_privilege');
    }

    public function rols(): BelongsToMany {
        return $this->belongsToMany(User::class, 'sys_users_rols', '_rol', '_user');
    }

    public function createdByRol(): HasOne {
        return $this->hasOne(User::class, '_created_by', 'id');
    }
    public function modifiedByRol(): HasOne {
        return $this->hasOne(User::class, '_modified_by', 'id');
    }
}
