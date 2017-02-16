<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedArticle extends Model
{
    protected $table = 'feed_article';

    protected $fillable = ['feedid', 'title', 'description', 'link', 'guid', 'pub_date', 'tag'];

    public $timestamps = true;

    public function Feed(){
        return $this->belongTo('App\Feed');
    }
}
