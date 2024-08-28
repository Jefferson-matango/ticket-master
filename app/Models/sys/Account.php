<?php

namespace App\Models\sys;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Account extends Model
{
    use HasFactory;

    protected $table = 'sys_accounts';

    protected $fillable = [
        'name',
        'logo',
        'delete',
    ];

    public function branches(): HasMany {
        return $this->hasMany(Branch::class, '_account');
    }

    public function createdByAccount(): HasOne {
        return $this->hasOne(User::class,'id',  '_created_by');
    }
    public function modifiedByAccount(): HasOne {
        return $this->hasOne(User::class, 'id', '_modified_by');
    }
}
