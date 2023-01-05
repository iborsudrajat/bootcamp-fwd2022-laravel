<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class TypeUser extends Model
{
    //use HasFactory;
    use softDeletes;

    // declare table
    public $table = 'type_user';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];
    //declare fillable
    protected $fillable = [
        'name',
        'created_at',
        'update_at',
        'deleted_at',
    ];
    // One to Many
    public function detail_user()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasMany('App\Models\ManagementAccess\DetailUser', 'type_user_id');
    }
}
