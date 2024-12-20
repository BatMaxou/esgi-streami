<?php

namespace App\Enum;

enum RoleEnum: string
{
    case SUPER = 'ROLE_SUPER_ADMIN';
    case ADMIN = 'ROLE_ADMIN';
    case USER = 'ROLE_USER';
    case BANNED = 'ROLE_BANNED';
}
