<?php

namespace App\Models;

use Laratrust\Models\Role as RoleModel;

class Role extends RoleModel
{
    public $guarded = [];

    $user = User::find(1);
    if ($user->hasRole('admin')) {
        // Do something
    }

}
