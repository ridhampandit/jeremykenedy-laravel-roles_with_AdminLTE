<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class Role extends Model
{
    use HasFactory, SoftDeletes, HasRoleAndPermission;

    protected $table = "roles";

    protected $guarded = [];
}
