@extends('Admin.landing')
@section('content')
        
                <div class="card mt-2">
                        <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" style="background-color:RGB(255, 255, 255) ;" >
                           
                        <thead>
                        <tr>
                        <th><b>ID</b></th>
                        <th><b>Name</b></th>
                        <th><b>Email</b></th>
                       
                        
                    </tr>
                </thead>
                    <tbody>
                        
                        @foreach($users as $user)
                        <tr>
                            <td><b>{{$user->id}}</b></td>
                            <td><b>{{$user->name}}</b></td>
                            <td><b>{{$user->email}}</b></td>
                            {{-- <td>
                                @foreach($user->roles as $role)
                                <span class="badge badge-primary">
                                {{$role->name}}
                            </span>
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