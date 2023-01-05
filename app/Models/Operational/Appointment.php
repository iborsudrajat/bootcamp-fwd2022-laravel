<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Appointment extends Model
{
    //use HasFactory;
    use softDeletes;

    // declare table
    public $table = 'appointment';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];
    //declare fillable
    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    //one to many
    public function doctor()
    {
        //3 parameter (path model,field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\Operational\Doctor', 'doctor_id', 'id');
    }

    //one to many
    public function consultation()
    {
        //3 parameter (path model,field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\MasterData\Consultation', 'consultation_id', 'id');
    }

    //one to many
    public function user()
    {
        //3 parameter (path model,field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\user', 'user_id', 'id');
    }

    

    // One to Many
    public function transaction()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasOne('App\Models\Operational\Transaction', 'appointment_id');
    }
}
