@extends('Admin.landing')
@section('content')
<div class="card mt-2">
        <div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered table-hover" style="background-color:RGB(255, 255, 255) ;">
        <a href="{{url('Admin/categories/create')}}">
            <p align="right"><button class="btn btn-sm btn-dark mb-2" ><i class="fa fa-plus-circle"> Add Category</i></button></p>
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
                
               
                {{-- <th><b>created_at</b></th>
                <th><b>updated_at</b></th> --}}
                <th><b>Operation</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
           
            <tr>
                
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
           
               
            {{-- <td>{{$category->created_at}}</td>
            <td>{{$category->updated_at}}</td> --}}
                <td>
                   
                    
                    <form action="{{url('Admin/categories/'.$category->id)}}" method="POST">
                        @csrf 
                        @method('DELETE')

                        <a href="{{url('Admin/categories/'.$category->id.'/edit')}}"><button type="button" class="btn btn-outline-success btn-sm " style="border-radius:5px;"><i class="fa fa-edit"></i> Edit</button></a>
                        
                        
                        
                      <button type="submit" class="btn btn-outline-danger btn-sm" style="border-radius:5px;" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i>  Delete </button>
                    </form>
                        
                        
                        
                        
                    </td>
                
            </tr>
            @endforeach
           
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-3" >
          
              {{ $categories->links() }}
           
          </div>
</div>
        </div>
</div>
@endsection

{{-- <div class="col-sm-6">
        <div class="form-group">
            <label for="category_id">Category Name</label>

            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

        </div>
    </div> --}}
