@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$listing->name}}  <a href="/listings" class="btn btn-primary btn-sm float-right">Go Back</a>
                    @if(Auth::check())
                    <a href="/dashboard" class="btn btn-success btn-sm float-right" style="margin-right: 15px">Go To Dashboard</a>
                    @endif
                
                </div>
    
                <div class="card-body">
                        <ul class="list-group">
                                <li class = "list-group-item">Name : {{$listing->name}}</li>
                                <li class = "list-group-item">Email : {{$listing->email}}</li>   
                                <li class = "list-group-item">Address : {{$listing->address}}</li>
                                <li class = "list-group-item">Phone : {{$listing->phone}}</li>
                                <li class = "list-group-item">Website :<a href="#" target="_blank">{{$listing->website}}</a> </li>
                            </ul> 
                            <hr>
                            <div class="well">
                                    {{$listing->bio}}
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection