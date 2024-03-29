<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [

        'id',
        'name',
        'path',
        'size'
        
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
