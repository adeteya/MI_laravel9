<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    //use HasFactory;
    use softDeletes;

    //Deklarasi Table
    public $table = 'permission_role';

     //Tipe Data Harus yyyy-mm-dd hh-mmm-ss
    protected $dates = [
            'created_at',
            'updated_at',
            'deleted_at',
    ];

     protected $fillable = [

            'permission_id',
            'role_id',
            'created_at',
            'updated_at',
            'deleted_at',
    
    ];
}

