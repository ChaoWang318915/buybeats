<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
use Auth;
use DB;

// Models
use App\Models\User;
use App\Models\Content;

class ContentController extends Controller
{

	public function contentList()
	{
		# code...
		$dataContent = Content::where('status','>', 0)->orderBy('id','desc')->get();
		// dd($dataContent);
		return view('content.list',compact('dataContent'));
	}

    public function create()
    {
    	// dd('ok');
    	return view('content.create');
    }

    public function store(Request $request)
    {
    	// dd($request);
    	try{
    		DB::beginTransaction();

    		$dataContent 					= new Content;
    		$dataContent->category_name 	= $request->category_name;
    		$dataContent->status 			= $request->status;
    		$dataContent->content 			= $request->content;
    		$dataContent->created_at 		= date('Y-m-d H:i:s');
    		$dataContent->save();

    		DB::commit();
    		// return back();
    		return redirect()->route('list-content')->with('success', 'Content has been created successfully!.');

    	}catch(Exception $e){
    		DB::rollback();
    		// return back();
    		return redirect()->route('list-content')->with('errorMessage', 'Failed to create content!.');
    	}
    }

    public function editContent($id)
    {
    	$content_id = decrypt($id);

        $dataContent    = Content::find($content_id);
    	// dd($dataContent);

        return view('content.update',compact('dataContent'));
    }

    public function updateContent(Request $request)
    {
    	
    	try{
    		DB::beginTransaction();

    		$dataContent 					= Content::find($request->id);
    		$dataContent->category_name 	= $request->category_name;
    		$dataContent->status 			= $request->status;
    		$dataContent->content 			= $request->content;
    		$dataContent->updated_at 		= date('Y-m-d H:i:s');
    		$dataContent->save();

    		DB::commit();
    		// return back();
    		return redirect()->route('list-content')->with('success', 'Content has been updated successfully!.');

    	}catch(Exception $e){
    		DB::rollback();
    		// return back();
    		return redirect()->route('list-content')->with('errorMessage', 'Failed to update content!.');
    	}
    }
}
