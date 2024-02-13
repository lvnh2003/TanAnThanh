<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Corcel\Model\Post as Corcel;
class News extends Corcel
{
    use HasFactory;
    protected $fillable = ['title', 'content','slug','description','isInBin'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function getImage()
    {
        preg_match('/<img[^>]+src="([^"]+)"[^>]*>/', $this->post_content, $matches);
        return isset($matches[1]) ? $matches[1] : null;
    }
}
