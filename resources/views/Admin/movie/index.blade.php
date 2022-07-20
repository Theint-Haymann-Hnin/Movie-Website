@extends('Admin.landing')
@section('content')
<div class="card mt-2">
        <div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered table-hover" style="background-color:RGB(255, 255, 255) ;">
        <a href="{{url('Admin/movie/create')}}">
            <p align="right"><button class="btn btn-sm btn-dark mb-2" ><i class="fa fa-plus-circle"> Add Movie</i></button></p>
        </a>
        @if(Session('successAlert'))
        <div class="alert alert-success alert-dismissible show fade">
            <strong>{{Session('successAlert')}}</strong>
            <button class="close" data-dismiss="alert">&times;</button>
        </div>
        @endif
        
        <thead>
            <tr>
               
                <th><b>id</b></th>
                <th><b>Name</b></th>
                <th><b>Description</b></th>
                <th><b>Actor</b></th>
                <th><b>Actress</b></th>
                <th><b>Writer</b></th>
                <th><b>Director</b></th>
                <th><b>Genre</b></th>
                <th><b>Category</b></th>
                <th><b>Company</b></th>
                <th><b>Image</b></th>
                <th><b>Video</b></th>
                
                <th><b>Date</b></th>
                
{{--                
                <th><b>created_at</b></th>
                <th><b>updated_at</b></th> --}}
                <th><b>Operation</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                
                <td>{{$movie->id}}</td>
                <td>{{$movie->name}}</td>
                <td><textarea readonly>{{$movie->description}}</textarea></td>
                <td>{{$movie->actor->name}}</td>
                <td>{{$movie->actress->name}}</td>
                <td>{{$movie->writer->name}}</td>
                <td>{{$movie->director->name}}</td>
                <td>{{$movie->genre->name}}</td>
                <td>{{$movie->category->name}}</td>
                <td>{{$movie->company->name}}</td>
                <td>
                    <img src="{{asset('storage/movie-images/'.$movie->image)}}" alt="" width="100px">
                </td>
                <td>{{$movie->video}}</td>
                <td>{{$movie->date}}</td>
               
               
                <td>
                   
                    
                    
                        <a href="{{url('Admin/movie/edit/'.$movie->id)}}"><button class="btn btn-outline-success btn-sm mb-2" style="border-radius:5px;"><i class="fa fa-edit"></i> Edit</button></a>
                        
                        
                        
                        <a href="{{url('Admin/movie/delete/'.$movie->id)}}"><button class="btn btn-outline-danger btn-sm" style="border-radius:5px;" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i>  Delete </button></a>
                        
                        
                        
                        
                    </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-3" >
          
              {{ $movies->links() }}
           
          </div>
</div>
        </div>
</div>
@endsection