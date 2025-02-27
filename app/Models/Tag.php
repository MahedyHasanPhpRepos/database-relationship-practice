<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'post_id',
        'tag_name'
    ];

    public function post(){
        return $this->belongsTo(Post::class) ; 
    }

}
