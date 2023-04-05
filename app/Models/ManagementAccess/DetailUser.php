<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    //use HasFactory;
    use softDeletes;

    //Deklarasi Table
    public $table = 'detail_user';

    //Tipe Data Harus yyyy-mm-dd hh-mmm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [

        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'age',
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    //Relasi One to many (hasMany, Parameter1, Parameter2, Parameter3)

    public function type_user() 
    {
        return $this->belongsTo('App\Models\MasterData\TypeUser', 'type_user_id', 'id');
    }

    //Relasi One to one (hasMany, Parameter1, Parameter2, Parameter3)
    public function user() 
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
