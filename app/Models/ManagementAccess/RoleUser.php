<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    //use HasFactory;
    use softDeletes;

    //Deklarasi Table
    public $table = 'role_user';

    //Tipe Data Harus yyyy-mm-dd hh-mmm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
    
        'role_id',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',

    ];
    //Relasi One to many (hasMany, Parameter1, Parameter2, Parameter3)

    public function role() 
    {
        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
    }

    public function user() 
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
