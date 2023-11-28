<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Role extends SpatieRole
{
    use HasFactory;
    use HasUlids;

    protected $primaryKey = 'id';
}
