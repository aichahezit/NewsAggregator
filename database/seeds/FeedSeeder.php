<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Feed;

/**
 * Created by PhpStorm.
 * User: Aicha
 * Date: 2015-12-05
 * Time: 4:16 PM
 */
class FeedSeeder extends Seeder
{
    public function run() {
        Model::unguard();
        // clear our database ----------------------------------------
        DB::table('feed')->delete();

        $s1 = Feed::create(array(
            'source'    => 'http://rss.cnn.com/rss/cnn_topstories.rss',
            'tag'       => 'CNN',
        ));

        $s2 = Feed::create(array(
            'source'    => 'http://feeds.bbci.co.uk/news/rss.xml',
            'tag'       => 'BBC',
        ));

        $s3 = Feed::create(array(
            'source'    => 'http://www.ctvnews.ca/rss/ctvnews-ca-top-stories-public-rss-1.822009',
            'tag'       => 'CTV',
        ));

        $s4 = Feed::create(array(
            'source'    => 'http://www.cbc.ca/cmlink/rss-topstories',
            'tag'       => 'CBC',
        ));

        Model::reguard();
    }

}