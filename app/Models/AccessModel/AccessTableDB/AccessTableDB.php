<?php

namespace App\Models\AccessModel\AccessTableDB;

use App\Models\UserModel\UserTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AccessTableDB extends Model implements AccessTableDBInterface
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'accesses';

    protected $fillable = [
        'id', 'name', 'desc', 'slug'
    ];

    protected $hidden = [
        'id',
    ];

    public function users(): HasMany {
        return $this->hasMany(
            UserTable::class,
            'id',
            'user_id'
        );
    }
}
