<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Role extends Model
{
    // use HasFactory;
    use softDeletes;

    // declare table
    public $table = 'role';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];
    //declare fillable
    protected $fillable = [
        'title',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // One to Many
    public function role_user()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasMany('App\Models\ManagementAccess\RoleUser', 'role_id');
    }

    // One to Many
    public function permission_role()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'role_id');
    }
}
