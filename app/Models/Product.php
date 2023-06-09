<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'products';
    protected $guarded =[];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'product_tags','product_id','tag_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
