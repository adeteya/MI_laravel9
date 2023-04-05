<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Appointment extends Model
{
    //use HasFactory;
   use softDeletes;

   //Deklarasi Table
   public $table = 'appointment';

    //Tipe Data Harus yyyy-mm-dd hh-mmm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
    
        'doctor_id',
        'user_id',
        'konsultasi_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',

    ];
}
