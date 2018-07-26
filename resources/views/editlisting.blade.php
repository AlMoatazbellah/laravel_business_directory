@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing <span class="pull-right"><a class="btn btn-default btn-xs" href="/dashboard">Back</a></span> </div>

                <div class="panel-body">
                    {!! Form::open(['action' => ['ListingsController@update', $listing->id]]) !!}
                        {{ Form::bsText('name', $listing->name, ['placeholder' => 'Company Name']) }}
                        {{ Form::bsText('website', $listing->website, ['placeholder' => 'Company Website']) }}
                        {{ Form::bsText('email', $listing->email, ['placeholder' => 'Company Email']) }}
                        {{ Form::bsText('phone', $listing->phone, ['placeholder' => 'Phone Number']) }}
                        {{ Form::bsText('address', $listing->address, ['placeholder' => 'Address']) }}
                        {{ Form::bsTextArea('bio', $listing->bio, ['placeholder' => 'About company']) }}
                        {{ Form::hidden('_method', 'PUT') }}
                        {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection