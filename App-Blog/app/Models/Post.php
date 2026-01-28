<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['titre','contenu','image','categorie_id'];

    public function categories (){
        $this->belongsTo(Categorie::class);
    }
}