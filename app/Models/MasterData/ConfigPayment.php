<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConfigPayment extends Model
{
   //use HasFactory;
   use SoftDeletes;

   //Deklarasi Table
   public $table = 'config_payment';

    //Tipe Data Harus yyyy-mm-dd hh-mmm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
    
        'fee',
        'vat',
        'created_at',
        'updated_at',
        'deleted_at',

    ];
}
