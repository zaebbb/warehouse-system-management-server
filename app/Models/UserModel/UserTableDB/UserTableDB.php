<?php

namespace App\Models\UserModel\UserTableDB;

use App\Models\AccessModel\AccessTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserTableDB extends Model implements UserTableDBInterface
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'id', 'name', 'surname', 'patronymic', 'login', 'password'
    ];

    protected $hidden = [
        'id',
        'password',
    ];

    public function access(): BelongsTo
    {
        return $this->belongsTo(
            AccessTable::class,
            'access_id',
            'id'
        );
    }
}
