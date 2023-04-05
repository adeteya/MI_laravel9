<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class TypeUser extends Model
{
       //use HasFactory;
   use softDeletes;

   //Deklarasi Table
   public $table = 'type_user';

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

    //Relasi One To Many (hasMany, Parameter1, Parameter2)

    public function detail_user() 
    {
        return $this->hasMany('App\Models\ManagementAccess\DetailUser', 'type_user_id');
    }
}
