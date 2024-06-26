<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['nombre'];

    public function usuario()
    {
        return $this->belongsToMany(Usuario::class);
    }
}