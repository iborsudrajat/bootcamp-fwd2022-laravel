<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Doctor extends Model
{
    //use HasFactory;
    use softDeletes;

    // declare table
    public $table = 'doctor';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];
    //declare fillable
    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'update_at',
        'deleted_at',
    ];
     //one to many
     public function specialist()
     {
         //3 parameter (path model,field foreign key, field primary key from table hasMany/hasOne)
         return $this->belongsTo('App\Models\MasterData\Specialist', 'specialist_id', 'id');
     }

     // One to Many
    public function appointment()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasMany('App\Models\Operational\Appointment', 'doctor_id');
    }
}
