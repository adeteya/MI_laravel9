<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Spesialist extends Model
{
    //use HasFactory;
   use softDeletes;

   //Deklarasi Table
   public $table = 'spesialist';

    //Tipe Data Harus yyyy-mm-dd hh-mmm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
    
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    public function doctor() 
    {
        return $this->hasMany('App\Models\Operational\Doctor', 'spesialist_id');
    }
}
