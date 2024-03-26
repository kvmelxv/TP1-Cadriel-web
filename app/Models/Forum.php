<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Resources\CategoryResource;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'titre',
        'contenu',
        'user_id'
    ];

    
    protected $casts = [
        'titre' => 'array',
        'contenu' => 'array',
    ];

    /* protected function forum(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value)
        );
    } */

    static public function categories(){
        $resource = CategoryResource::collection(self::select()->orderBy('titre')->get());
        $data = json_encode($resource);
        return json_decode($data, true);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
   
}
