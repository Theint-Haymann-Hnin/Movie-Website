@extends('Admin.landing')
@section('content')
<div class="card">
    <div class="card-header">
        <h3><b>Create Movie</b></h3>
    </div>
    <div class="card-body">
        <form action="{{url('Admin/movie/store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            
            
            
            <div class="form-group">
                <label for="name"><b>Name</b></label>
                
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter movie's name" value="{{old('name')}}">
                @error('name')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="description"><strong>Description</strong></label>
                
                <textarea  name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Enter movie's description">{{old('description')}}</textarea>
                @error('description')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="actor_id"><b>Actor</b></label>
                <select name="actor_id" id="actor_id" class="form-control">
                        <option value="">Select Actor</option>
                    
                    @foreach($actors as $actor)
                  
                    <option value="{{$actor->id}}">{{$actor->name}}</option>
                    @endforeach
                </select>
               
            </div>
            
            <div class="form-group">
                <label for="actress_id"><b>Actress</b></label>
                <select name="actress_id" id="actress_id" class="form-control @error('actress') is-invalid @enderror">
                        <option value="">Select Actress</option>
                    
                    @foreach($actresses as $actress)
                    
                    <option value="{{$actress->id}}">{{$actress->name}}</option>
                    @endforeach
                </select>
                @error('actress')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="writer_id"><b>Writer</b></label>
                <select name="writer_id" id="writer_id" class="form-control @error('writer') is-invalid @enderror">
                        <option value="">Select Writer</option>
                    
                    @foreach($writers as $writer)
                    
                    <option value="{{$writer->id}}">{{$writer->name}}</option>
                    @endforeach
                </select>
                @error('writer')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="director_id"><b>Director</b></label>
                <select name="director_id" id="director_id" class="form-control @error('director') is-invalid @enderror">
                        <option value="">Select Director</option>
                    
                    @foreach($directors as $director)
                   
                    <option value="{{$director->id}}">{{$director->name}}</option>
                    @endforeach
                </select>
                @error('director')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="genre_id"><b>Genre</b></label>
                <select name="genre_id" id="genre_id" class="form-control @error('genre') is-invalid @enderror">
                        <option value="">Select Genre</option>
                    
                    @foreach($genres as $genre)
                   
                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                    @endforeach
                </select>
                @error('genre')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id"><b>Category</b></label>
                <select name="category_id" id="category_id" class="form-control @error('category') is-invalid @enderror">
                        <option value="">Select Category</option>
                    
                    @foreach($categories as $category)
                   
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="company_id"><b>Company</b></label>
                <select name="company_id" id="company_id" class="form-control @error('company') is-invalid @enderror">
                        <option value="">Select Company</option>
                    
                    @foreach($companies as $company)
                    
                    <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>
                @error('company')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image"><b>Image</b></label>
                
                <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror"  placeholder="Choose Image">
                @error('image')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
                
            </div>
            <div class="form-group">
                <label for="video"><b>Video</b></label>
                
                <input type="text" id="video" name="video" class="form-control @error('video') is-invalid @enderror"  placeholder= "Video">
                @error('video')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
                
            </div>
            <div class="form-group">
                <label for="name"><b>Date</b></label>
                <input type="date" id="date" name="date"
                value="date" style="width:1000px;">
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <button class="btn btn-dark btn-sm">Create</button>
            
        </form>
        
        
    </div>
    
    
</div>

@endsection