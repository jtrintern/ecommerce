<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as SpatiePermission;
use Illuminate\Database\Eloquent\Concerns\HasUlids;


class Permission extends SpatiePermission
{
    use HasFactory;
    use HasUlids;

    protected $primaryKey = 'id';
}
