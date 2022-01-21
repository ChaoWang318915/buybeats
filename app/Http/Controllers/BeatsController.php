<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
use Auth;
use DB;
use Response;
use File;
use Image;
// Models
use App\Models\User;
use App\Models\BeatsCollection;
use App\Models\TagsCollection;

class BeatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $user_type = Auth::user()->type;
        if ($user_type == 2) {
            $BeatsCollection = BeatsCollection::where('tbl_beats_collection.user_id',$user_id)->get();
        }elseif($user_type == 1)
        {
            $BeatsCollection = BeatsCollection::all();
        }else
        {
            return redirect()->route('dashboard');
            // return view('error_page');
        }
        return view('beats.index',compact('BeatsCollection'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'beat_title' => 'required',
                'beat_mp3'   => 'required',
                'beat_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            ], [
                'beat_title.required' => 'beat is required',
                'beat_mp3.required' => 'beat mp3 is required',
                'beat_price.required' => 'beat price is only amount',
            ]);

        $user_id = Auth::user()->id;

        $beatInfo = new BeatsCollection;
        $beatInfo->beat_title           = $request->beat_title;
        $beatInfo->beat_type            = $request->beat_type;
        $beatInfo->beat_tempo           = $request->beat_tempo;
        $beatInfo->beat_genre           = $request->beat_genre;
        $beatInfo->beat_image           = $request->beat_image;
        $beatInfo->beat_mp3             = $request->beat_mp3;
        $beatInfo->beat_price           = $request->beat_price;
        $beatInfo->beat_description     = $request->beat_description;
        $beatInfo->user_id              = $user_id;


        // $image_name =$request->beat_title;
        // $mp3_name =$request->beat_title;

           // if ($request->hasFile('beat_image')) {
           //       $avatarPath = $request->file('beat_image');
           //       $avatarName = 'id-'.Auth::id(). "/" .time() . '.' . $avatarPath->getClientOriginalExtension();
           //       $path = $request->file('beat_image')->storeAs('beat-image/', $avatarName, 'public');
           //       $beatInfo->beat_image = '/storage/'.$path;
           //       $beatInfo->beat_image = $avatarName;
           //    }
           
            // if ($request->hasFile('beat_image')) {
            //     $request_image = $request->file('beat_image');
            //     $image = Image::make($request_image);
            //     $image_path = storage_path('app/public/beat-image/id-'.Auth::id().'/');

            //     if (!File::exists($image_path)) {
            //         File::makeDirectory($image_path);
            //     }

            //     $image_name = time().'.'.$request_image->getClientOriginalExtension();

               
            //     $image->resize(500, 500);

            //     $image->save($image_path.$image_name);
            //     $beatInfo->beat_image = 'id-'.Auth::id().'/'.$image_name;
            // }

        //   if ($request->hasFile('beat_mp3')) {
        //      $avatarPath = $request->file('beat_mp3');
        //      $avatarName = 'id-'.Auth::id(). "/" .time() . '.' . $avatarPath->getClientOriginalExtension();

        //      $path = $request->file('beat_mp3')->storeAs('beat-file/', $avatarName, 'public');
        //      $beatInfo->beat_mp3 = '/storage/'.$path;
        //      $beatInfo->beat_mp3 = $avatarName;
        //   }



        if ($beatInfo->save()) {
            if (isset($request['tag_name']))
            {
                foreach ($request['tag_name'] as $key => $value)
                {
                    $tag_entries[] = [
                        'user_id'           => $user_id,
                        'beat_id'           => $beatInfo->id,
                        'tag_name'          => $request['tag_name'][$key],
                        'created_at'        => date('Y-m-d H:i:s'),
                    ];
                }

                DB::table('tbl_tags_collection')->insert($tag_entries);
            }
            
        }
        
        return redirect()->route('list-beats')->with('success', 'Your Beats has been uploaded successfully!.');
    }

    public  function dropZoneImage(Request $request)  
    {  
        $file = $request->file('file');
        $fileName = 'id-'.Auth::id(). "/" .time().'.'.$file->extension();
        $file->storeAs('beat-image/', $fileName, 'public');
        // echo json_encode( $fileName );
        return response()->json(['buyBeatsImage'=>$fileName]);
    } 

    public function  dropZoneAudio (Request $request)  
    {  
        $file = $request->file('file');
        $fileName = 'id-'.Auth::id(). "/" .time().'.'.$file->extension();
        $file->storeAs('beat-file/', $fileName, 'public');
        // echo json_encode( $fileName );
        return response()->json(['buyBeatsAudio'=>$fileName]);
    }

    public function mySales()
    {
        # code...
        return view('producer.my-sales');
    }
    public function mySettings()
    {
        # code...
        return view('producer.my-settings');
    }
    public function beatLicenses()
    {
        # code...
        return view('producer.beat-licenses');
    }
    public function supportHelp()
    {
        # code...
        return view('general.support-help');
    }

    public function buyBeats()
    {
        # code...
        return view('member.buy-beats');
    }
    public function myOrders()
    {
        # code...
        return view('member.my-orders');
    }

    public function myFavorites()
    {
        # code...
        return view('member.my-favorites');
    }
    public function specialOffers()
    {
        # code...
        return view('member.special-offers');
    }
    public function myFollows()
    {
        # code...
        return view('member.my-follows');
    }

}
