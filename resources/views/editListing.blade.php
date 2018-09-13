@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing <a href="/dashboard" class="btn btn-primary float-right btn-sm">Go back</a></div>
    
                <div class="card-body">
                   
                    
                    {!! Form::open(['action' => ['ListingsController@update',$listing->id] , 'method' => 'POST']) !!}
                    {{ Form::bsText('name',$listing->name,['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('email',$listing->email,['placeholder' => 'Company Email']) }}
                    {{ Form::bsText('address',$listing->address,['placeholder' => 'Company Address']) }}
                    {{ Form::bsText('phone',$listing->phone,['placeholder' => 'Company Phone number']) }}
                    {{ Form::bsText('website',$listing->website,['placeholder' => 'Company Website']) }}
                    {{ Form::bsTextArea('bio',$listing->bio,['placeholder' => 'About this Company']) }}
                    {{ Form::bsSubmit('submit','Update',['class' => 'btn btn-success']) }}
                    {{ Form::hidden('_method' , 'PUT') }}
                    {!! Form::close() !!}
                    
                    
                   
                    
                </div>
            </div>
        </div>
    </div>
@endsection