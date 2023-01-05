<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Specialist extends Model
{
    //use HasFactory;
    use softDeletes;

    // declare table
    public $table = 'specialist';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];
    //declare fillable
    protected $fillable = [
        'name',
        'price',
        'created_at',
        'update_at',
        'deleted_at',
    ];
        // One to Many
    public function doctor()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasMany('App\Models\Operational\Doctor', 'specialist_id');
    }
}
