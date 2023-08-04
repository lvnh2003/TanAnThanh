<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content','slug','description','isInBin'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function getImage()
    {
        $image= Image::where('news_id',$this->id)->first();
        if($image)
        {
            return asset('storage/news/').'/'.$image->image_path;
        }
        return null;
        
    }
}
