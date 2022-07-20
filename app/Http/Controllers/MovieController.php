<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
use App\Actor;
use App\Actress;
use App\Writer;
use App\Director;
use App\Genre;
use App\Category;
use App\Company;
use File;


class MovieController extends Controller
{   
    
    public function index(){
        
        $movies =Movie::paginate(5);
        return view('Admin.movie.index',compact('movies'));
    }
    public function create(){
        

        $actors=Actor::all();
        $actresses=Actress::all();
        $writers=Writer::all();
        $directors=Director::all();
        $genres=Genre::all();
        $categories=Category::all();
        $companies=Company::all();
        return view('Admin.movie.create',compact('actors','actresses','writers','directors','genres','categories','companies'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'actor_id'=>'required',
            'actress_id'=>'required',
            'writer_id'=>'required',
            'director_id'=>'required',
            'genre_id'=>'required',
            'category_id'=>'required',
            'company_id'=>'required',
            'image'=>'required',
            'video'=>'required',
            'date'=>'required'
        ]);
        $image =$request->image;
        $imageName=uniqid().'_'.$image->getClientOriginalName();
        $image->storeAs('public/movie-images',$imageName);
       Movie::create([
           'name'=>$request->name,
           'description'=>$request->description,
           'actor_id'=>$request->actor_id,
            'actress_id'=>$request->actress_id,
            'writer_id'=>$request->writer_id,
            'director_id'=>$request->director_id,
            'genre_id'=>$request->genre_id,
            'category_id'=>$request->category_id,
            'company_id'=>$request->company_id,
            'image'=>$imageName,
            'video'=>$request->video,
             'date'=>$request->date
       ]); 
      
       
       return redirect('Admin/movie/index')->with('successAlert','You have successfully created');

    } 
    public function edit($id){

        $movie =Movie::find($id);
      
        $actors=Actor::all();
        $actresses=Actress::all();
        $writers=Writer::all();
        $directors=Director::all();
        $genres=Genre::all();
        $categories=Category::all();
        $companies=Company::all();
        return view('Admin.movie.edit',compact('movie','actors','actresses','writers','directors','genres','categories','companies'));
       
        
    }
    public function update(Request $request, $id)
    {
        $movie =Movie::find($id);   
    $request->validate([
        'name'=>'required',
        'description'=>'required',
        'actor_id'=>'required',
            'actress_id'=>'required',
            'writer_id'=>'required',
            'director_id'=>'required',
            'genre_id'=>'required',
            'category_id'=>'required',
            'company_id'=>'required',
            'image'=>'nullable',
            'video'=>'required',
            'date'=>'required'

    ]);
    if($request->image){
        $old_image=$movie->image;
       File::delete('storage/movie-images/'.$old_image);
        $image =$request->image;
        $imageName=uniqid().'_'.$image->getClientOriginalName();
        $image->storeAs('public/movie-images',$imageName);
        
      $movie->update([

        'name'=>$request->name,
        'description'=>$request->description,
        'actor_id'=>$request->actor_id,
        'actress_id'=>$request->actress_id,
        'writer_id'=>$request->writer_id,
        'director_id'=>$request->director_id,
        'genre_id'=>$request->genre_id,
        'category_id'=>$request->category_id,
        'company_id'=>$request->company_id,
        'image'=>$imageName,
       
        'video'=>$request->video,
        'date'=>$request->date
        

    ]);
    }
  
      $movie->update([

            'name'=>$request->name,
            'description'=>$request->description,
            'actor_id'=>$request->actor_id,
            'actress_id'=>$request->actress_id,
            'writer_id'=>$request->writer_id,
            'director_id'=>$request->director_id,
            'genre_id'=>$request->genre_id,
            'category_id'=>$request->category_id,
            'company_id'=>$request->company_id,
           
            'video'=>$request->video,
            'date'=>$request->date
            

        ]);
        return redirect('Admin/movie/index')->with('successAlert','You have successfully updated');
    }
   
    public function delete($id)
    {   
         Movie::find($id)->delete();
         return redirect('/Admin/movie/index')->with('successAlert','You have successfully deleted');
    }

    
}
