@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing <span class="pull-right"><a class="btn btn-default btn-xs" href="/dashboard">Back</a></span></div>

                <div class="panel-body">
                    {!! Form::open(['action' => 'ListingsController@store', 'method'=> 'POST']) !!}
                        {{ Form::bsText('name', '', ['placeholder' => 'Company Name']) }}
                        {{ Form::bsText('website', '', ['placeholder' => 'Company Website']) }}
                        {{ Form::bsText('email', '', ['placeholder' => 'Company Email']) }}
                        {{ Form::bsText('phone', '', ['placeholder' => 'Phone Number']) }}
                        {{ Form::bsText('address', '', ['placeholder' => 'Address']) }}
                        {{ Form::bsTextArea('bio', '', ['placeholder' => 'About company']) }}
                        {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection