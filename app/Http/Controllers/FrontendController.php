<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
use Auth;
use DB;
use Response;
use Storage;
// Models
use App\Models\User;
use App\Models\BeatsCollection;
use App\Models\TagsCollection;
use App\Models\Content;

class FrontendController extends Controller
{
    /**
     * Display Cover Page Function.
     *
     * @return \Illuminate\Http\Response
     */

    public function cover ()
    {
         return view('frontend.cover_page');
    }

    /**
     * Display battle Page Function.
     *
     * @return \Illuminate\Http\Response
     */

    public function battles ()
    {
         return view('battles.cover_page');
    }
    /**
     * Display All Releases Beats Function.
     *
     * @return \Illuminate\Http\Response
     */

    public function getAllReleasesBeats()
    {
        $collections =  BeatsCollection::orderBy('id','desc')->get();
        // $collections =  BeatsCollection::all();
        return view('frontend.releases-collection.all_releases_beats_collection',compact('collections'));
    }


    /**
     * Display All Artist Beats Function.
     *
     * @return \Illuminate\Http\Response
     */

    public function getArtistAllBeats($url)
    {
        
        if($url == 'explore'){
             // dd($url);
            return redirect()->route('collection_of_all_releases_beats');

        }elseif ($url == 'dashboard') {
             return redirect()->route('dashboard');
        }
        
        $producerInfo = User::where('user_name',$url)->first();
        
        if($producerInfo != null){
           
           $beatsCollections = BeatsCollection::where('user_id',$producerInfo->id)->get();
           return view('frontend.artists-collection.artist_all_beats_collection',compact('beatsCollections','producerInfo'));
           
       }
       return redirect()->route('cover');
       
    }
    
    public function viewContent($content)
    {

        $myContent= str_replace('-', ' ', strtoupper($content));
        $dataContent = Content::where('category_name', $myContent)->first();
        // dd($dataContent);
        return view('frontend.view_content',compact('dataContent'));

    }
    
}
