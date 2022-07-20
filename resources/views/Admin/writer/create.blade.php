@extends('Admin.landing')
@section('content')
<div class="card mt-3">
        <div class="card-header">
            <h3><b>Create Writer</b></h3>
        </div>
            <div class="card-body">
                    <form action="{{url('Admin/writers')}}" method="POST">
                            {{ csrf_field() }}
                              
                            <div class="form-group">
                                <label for="name"><b>Name</b></label>
                                   
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter writer's name" value="{{old('name')}}">
                                @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                    <label for="description"><strong>Description</strong></label>
                                       
                                    <textarea  name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Enter description">{{old('description')}}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <button class="btn btn-dark btn-sm">Create</button>
                        </form>
                    
    
            </div>
            
        
    </div>
@endsection