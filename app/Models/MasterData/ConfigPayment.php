<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class ConfigPayment extends Model
{
    //use HasFactory;
    use softDeletes;

    // declare table
    public $table = 'config_payment';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];
    //declare fillable
    protected $fillable = [
        'fee',
        'vat',
        'created_at',
        'update_at',
        'deleted_at',
    ];
}
