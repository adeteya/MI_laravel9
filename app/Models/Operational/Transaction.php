<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Transaction extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //Deklarasi Table
    public $table = 'transaksi';
 
     //Tipe Data Harus yyyy-mm-dd hh-mmm-ss
     protected $dates = [
         'created_at',
         'updated_at',
         'deleted_at',
     ];
 
     protected $fillable = [
     
         'appointment_id',
         'fee_doctor',
         'fee_spesialist',
         'fee_hospital',
         'sub_total',
         'vat',
         'total',
         'created_at',
         'updated_at',
         'deleted_at',
 
     ];

     public function appointment() 
    {
        return $this->belongsTo('App\Models\Operational/Appointment', 'appointment_id', 'id');
    }

     
}
