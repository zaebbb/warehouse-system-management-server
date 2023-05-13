<?php

namespace App\Models\UserModel\UserTableProperties;

use App\Models\UserModel\UserTableDB\UserTableDB;

class UserTableProperties extends UserTableDB implements UserTablePropertiesInterface
{
    const ACCESS_SUPER_ADMIN = 'super-admin';
    const ACCESS_ADMIN = 'admin';
    const ACCESS_USER = 'user';
}
