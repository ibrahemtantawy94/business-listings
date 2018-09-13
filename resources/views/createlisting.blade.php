@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a business Listing<a href="/dashboard" class="btn btn-primary float-right btn-sm">Go back</a></div>
    
                <div class="card-body">
                   
                    
                    {!! Form::open(['action' => 'ListingsController@store' , 'method' => 'POST']) !!}
                    {{ Form::bsText('name','',['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('email','',['placeholder' => 'Company Email']) }}
                    {{ Form::bsText('address','',['placeholder' => 'Company Address']) }}
                    {{ Form::bsText('phone','',['placeholder' => 'Company Phone number']) }}
                    {{ Form::bsText('website','',['placeholder' => 'Company Website']) }}
                    {{ Form::bsTextArea('bio','',['placeholder' => 'About this Company']) }}
                    {{ Form::bsSubmit('submit','Submit',['class' => 'btn btn-success']) }}
                    {!! Form::close() !!}
                    
                    
                   
                    
                </div>
            </div>
        </div>
    </div>
@endsection