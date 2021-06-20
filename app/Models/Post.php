<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded= ['id', 'created_at', 'updated_at'] ;

    public function getRouteKeyName(){
        return "slug";
    }
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function tags(){
       return $this->belongsToMany(Tag::class); 
    }
    public function image(){
        return $this->morphOne('App\Models\Image','Imageable');
    }

   
}
