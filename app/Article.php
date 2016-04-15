<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['user_id', 'title', 'body', 'image'];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }


    /**
     * Asigna un comentario al artículo
     * 
     * @param array $comment
     */
    public function assignComment(array $comment)
    {
        $this->comments()->create($comment);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

}
