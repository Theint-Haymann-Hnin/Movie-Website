@extends('Admin.landing')
@section('content')
<div class="card mt-3">
        <div class="card-header">
            <h3><b>Create Category</b></h3>
        </div>
            <div class="card-body">
                    <form action="{{url('Admin/categories')}}" method="POST">
                            {{ csrf_field() }}
                              
                            <div class="form-group">
                                <label for="name"><b>Name</b></label>
                                   
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter category's name" value="{{old('name')}}">
                                @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
        
                            
                                <button class="btn btn-dark btn-sm">Create</button>
                        </form>
                    
    
            </div>
            
        
    </div>
@endsection