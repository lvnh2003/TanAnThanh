<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['image_path', 'description','content'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function getImage()
    {
        return asset('storage/news').'/'.$this->image_path;
    }
}
