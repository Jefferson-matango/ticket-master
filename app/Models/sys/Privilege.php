<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
}
