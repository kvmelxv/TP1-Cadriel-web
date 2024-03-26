<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [

        'id',
        'nom',
        'adresse',
        'telephone',
        'email',
        'date_de_naissance',
        'password',
        'ville_id'
        
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ville(){
        return $this->belongsTo(Ville::class);
    }

    public function forum() {
        return $this->hasmany(Forum::class);
    }
}
