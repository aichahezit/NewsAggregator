<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Feed;
use App\FeedArticle;
class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->parse();
        $data = FeedArticle::select('title','description','link','pub_date','tag')->orderBy('pub_date','DESC')->simplePaginate(15);
        return view('user.master',compact('data'));
    }

    public function selectTag($tag){
        if(trim($tag) == "refresh"){
            $this->parse();
            return redirect('/');
        }
        else{
            $data = FeedArticle::select('title','description','link','pub_date','tag')
                                ->where('tag',$tag)
                                ->orderBy('pub_date','DESC')->simplePaginate(15);
            if(empty($data)){
                return "Page not found";
            }
            else{
                return view('user.master',compact('data'));
            }
        }
    }

    
    /*
     * TODO
     * - error handling
     * - check length of dom, hardcoded
     * - check for duplicates, if so don't enter
     * [x] date format
     * */
    public function parse(){
        $sources = Feed::select('id', 'source', 'tag')->get()->toArray();

        foreach($sources as $source) {
            //load xml into DOMobject
            $dom = new \DOMDocument;
            $dom->load($source['source']);

            //if there is a problem with the source, continue to the next
            if (!$dom) {
                echo 'Error while parsing the document';
                continue;
            }

            //gets all children of the xml tag (using simpleXML)
            $items = simplexml_import_dom($dom);

            date_default_timezone_set('America/Vancouver');

            for ($i = 0; $i < count($items->channel->item); $i++) {
                $duplicate = 0;
                $guids = FeedArticle::select('guid')->get()->toArray();
                foreach($guids as $guid){
                    if(strcmp($guid['guid'], strip_tags($items->channel->item[$i]->guid)) == 0){
                        $duplicate = 1;
                    }
                }
                if($duplicate == 0) {
                    $feedarticle = new FeedArticle;
                    $feedarticle->feedid = $source['id'];
                    $feedarticle->title = strip_tags($items->channel->item[$i]->title);
                    $feedarticle->description = trim(strip_tags($items->channel->item[$i]->description));
                    $feedarticle->link = strip_tags($items->channel->item[$i]->link);
                    $feedarticle->guid = strip_tags($items->channel->item[$i]->guid);

                    //change format of timestamp for insertion into database
                    $dt = new \DateTime($items->channel->item[$i]->pubDate);
                    $pubdate = date_format($dt, 'Y-m-d H:i:s');
                    $feedarticle->pub_date = $pubdate;

                    $feedarticle->tag = $source['tag'];
                    $feedarticle->save();
                }
            }
        }
    }
}
