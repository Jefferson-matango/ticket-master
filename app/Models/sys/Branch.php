<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\User;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'sys_branches';

    protected $guarded = [
        'id',
        '_account',
        'delete',
        '_created_by',
        '_modified_by',
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

    public function createdByBranch(): HasOne {
        return $this->hasOne (User::class, '_created_by', 'id');
    }
    public function modifiedByBranch(): HasOne {
        return $this->hasOne (User::class, '_modified_by', 'id');
    }
}
