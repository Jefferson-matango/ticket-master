<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    use HasFactory;

    protected $table = 'sys_accounts';

    protected $fillable = [
        'name',
        'logo',
        'delete',
        'created_by',
        'modified_by'
    ];

    public function branches(): HasMany {
        return $this->hasMany(Branch::class, '_account');
    }
}
