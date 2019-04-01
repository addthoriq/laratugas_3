<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable  = ['name', 'email', 'password'];
    // protected $guarded = ['created_at', 'updated_at'];
    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
