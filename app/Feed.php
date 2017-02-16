<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $table = 'feed';

    protected $fillable = ['source', 'tag'];

    public $timestamps = false;

    public function FeedArticle(){
        return $this->hasMany('App\FeedArticle');
    }

}
