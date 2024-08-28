<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\User;

class Privilege extends Model
{
    use HasFactory;

    protected $table = 'sys_privileges';

    protected $guarded = [
        'id',
        '_module',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function rols(): BelongsToMany {
        return $this->belongsToMany(Rol::class, 'sys_rols_privileges', '_privilege', '_rol');
    }

    public function createdByPrivilege(): HasOne {
        return $this->hasOne(User::class, '_created_by', 'id');
    }
    public function modifiedByPrivilege(): HasOne {
        return $this->hasOne(User::class, '_modified_by', 'id');
    }
}
