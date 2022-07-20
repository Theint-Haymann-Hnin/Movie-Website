@extends('Admin.landing')
@section('content')

        
                <div class="card mt-2">
                        <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" style="background-color:RGB(255, 255, 255) ;" >
                           
                        <thead>
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        
                    </tr>
                </thead>
                    <tbody>
                        
                        @foreach($roles as $role)
                        <tr>
                            <td><b>{{$role->id}}</b></td>
                            <td><b>{{$role->name}}</b></td>
                           
                            {{-- <td>
                                @foreach($user->roles as $role)
                                <span class="badge badge-primary">
                                {{$role->name}}
                            </span>
                                @endforeach
                            </td>
                            <td>
                                @foreach(Auth::user()->roles as $role)
                                @if($role->name == 'Manager') 
                                <a href="{{url('admin/users/'.$user->id.'/edit')}}" class="btn btn-sm btn-info">
                                    Manage Roles</a>
                                @endif
                                @endforeach
                              
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    </div>
                        
                </div>
            </div>
    
            @endsection