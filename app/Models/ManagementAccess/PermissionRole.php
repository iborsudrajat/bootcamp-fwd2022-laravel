<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class PermissionRole extends Model
{
    // use HasFactory;
    use softDeletes;

    // declare table
    public $table = 'permission_role';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];
    //declare fillable
    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'update_at',
        'deleted_at',
    ];

     //one to many
     public function permission()
     {
         //3 parameter (path model,field foreign key, field primary key from table hasMany/hasOne)
         return $this->belongsTo('App\Models\ManagementAccess\permission', 'permission_id', 'id');
     }
 
     //one to many
     public function role()
     {
         //3 parameter (path model,field foreign key, field primary key from table hasMany/hasOne)
         return $this->belongsTo('App\Models\MangementAccess\role', 'role_id', 'id');
     }
 
}
