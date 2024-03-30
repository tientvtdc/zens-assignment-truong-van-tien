<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    protected $fillable = [
        'content',
        'likes',
        'dislikes',
    ];

    public function increaseLike()
    {
        $this->likes++;
        $this->save();
    }

    public function decreaseLike()
    {
        if ($this->likes > 0) {
            $this->likes--;
            $this->save();
        }
    }

    public function increaseDislike()
    {
        $this->dislikes++;
        $this->save();
    }

    public function decreaseDislike()
    {
        if ($this->dislikes > 0) {
            $this->dislikes--;
            $this->save();
        }
    }

    public function getVoteCountAttribute()
    {
        return $this->likes - $this->dislikes;
    }
}
