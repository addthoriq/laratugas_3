<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable  = ['name', 'email', 'password'];
    // protected $guarded = ['created_at', 'updated_at'];
    public function article()
    {
        return $this->hasMany(Article::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
