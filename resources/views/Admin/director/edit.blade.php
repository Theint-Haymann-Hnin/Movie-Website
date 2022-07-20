@extends('Admin.landing')
@section('content')
<div class="card mt-3">
        <div class="card-header">
            <h3><b>Edit Director</b></h3>
        </div>
            <div class="card-body">
                    <form action="{{url('Admin/directors/'.$director->id)}}" method="POST">
                            {{ csrf_field() }}
                            @method('PUT')
                              
                            <div class="form-group">
                                <label for="name"><b>Name</b></label>
                                   
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter director's name" value="{{ $director->name ?? old('name')}}">
                                @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                    <label for="description"><strong>Description</strong></label>
                                       
                                    <textarea  name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Enter description">{{$director->description ?? old('description')}}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <button class="btn btn-dark btn-sm">Update</button>
                        </form>
                    
    
            </div>
            
        
    </div>
@endsection