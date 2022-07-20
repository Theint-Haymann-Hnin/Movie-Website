<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Movie;
use App\Category;
use App\Rating;

class PageController extends Controller
{  

    public function landing(){
        $movies =Movie::paginate(30);
        $categories=Category::all();
       
        return view('UI.landing',compact('categories','movies'));

    }
    public function detail($id){
       $movie =Movie::findorFail($id);
       $categories=Category::all();
       $five = Rating::where('rating',5)->where('movie_id',$id)->get()->count();
       $four = Rating::where('rating',4)->where('movie_id',$id)->get()->count();
       $three = Rating::where('rating',3)->where('movie_id',$id)->get()->count();
       $two = Rating::where('rating',2)->where('movie_id',$id)->get()->count();
       $one = Rating::where('rating',1)->where('movie_id',$id)->get()->count();
       $messages=Rating::where('movie_id',$id)->get('message');
      
        return view('UI.Detail',compact('movie','categories','five','four','three','two','one','messages'));
    } 
    // Rating
    public function rating(Request $request)
    {   
        $request->validate([
           
            'rating'=>'required',
            'message'=>'required'
        ]);
        $rating = count($request->rating);
      
       $existRating =Rating::where('user_id',Auth::user()->id)->where('movie_id',$request->movie_id)->first();
       if($existRating){
           return back()->with('successAlert','You can\'t review in two times');
       }
        Rating::create([
            'movie_id' => $request->movie_id,
            'user_id' => Auth::user()->id,
            'rating' => $rating,
            'message' => $request->message,
        ]);
        return back()->with('successAlert','You have successfully reviewed');
    }
    // SEARCHING
    public function searching()
    {   $movies=Movie::paginate(30);
        return view('UI.search',compact('movies'));
    }

    public function search(Request $request)
    {   
        $searchData=$request->search_data;
        $movies =Movie::where('name','like',"%".$searchData."%")->
        orWhereHas('actor',function($actor)use($searchData){
            $actor->where('name','like',"%".$searchData."%");

        })->
        orWhereHas('actress',function($actress)use($searchData){
            $actress->where('name','like',"%".$searchData."%");

        })->paginate(30);
        return view('UI.search',compact('movies'));
    } 

    // Search movie by category 

    public function searchByCategory($catId)
    {   
        
        $movies =Movie::where('category_id','=',$catId)->paginate(30);
        $categories=Category::all();
        return view('UI.landing',compact('categories','movies'));

    }
   
       

    
    

}
