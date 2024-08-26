<?php

namespace App\Models\sys;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'sys_branches';

    protected $guarded = [
        'id',
        '_account',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function account(): BelongsTo {
        return $this->belongsTo(Account::class, '_account');
    }

    public function users(): HasMany {
        return $this->hasMany(User::class, '_branch');
    }
}
