<?php

namespace App\Models;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table='roles';
    protected $fillable = [
       'name'
    ];
    

    public function permission()
    {
        return $this->belongsToMany(Permission::class,'role_permission');
    }


    
}