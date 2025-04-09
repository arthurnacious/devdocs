<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'page_name',
        'functionality',
        'content'
    ];



    public function parent()
    {
        return $this->belongsTo(Post::class, 'parent_post_id');
    }

    public function children()
    {
        return $this->hasMany(Post::class, 'parent_post_id');
    }

}
