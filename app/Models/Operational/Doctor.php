<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Doctor extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //Deklarasi Table
    public $table = 'doctor';
 
     //Tipe Data Harus yyyy-mm-dd hh-mmm-ss
     protected $dates = [
         'created_at',
         'updated_at',
         'deleted_at',
     ];
 
     protected $fillable = [
     
         'spesialist_id',
         'name',
         'fee',
         'photo',
         'created_at',
         'updated_at',
         'deleted_at',
 
     ];

     public function spesialist() 
     {
         return $this->belongsTo('App\Models\Operational\Spesialist', 'spesialist_id', 'id');
     }

     public function appointment() 
     {
         return $this->hasMany('App\Models\Operational\Appointment', 'doctor_id');
     }
}
