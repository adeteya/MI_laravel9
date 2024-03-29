<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    //use HasFactory;
   use SoftDeletes;

   //Deklarasi Table
   public $table = 'konsultasi';

    //Tipe Data Harus yyyy-mm-dd hh-mmm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
    
        'name',
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    public function appointment() 
    {
        return $this->hasMany('App\Models\MasterData\Appointment', 'konsultasi_id');
    }
}
