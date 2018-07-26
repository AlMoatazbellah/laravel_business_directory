@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right"><a class="btn btn-success btn-xs" href="/listings/create">Add Listing</a></span></div>

                <div class="panel-body">
                    <h3>Your Listing</h3>
                    @if( count($listings) )
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach( $listings as $list )
                            <tr>
                            <td>{{ $list->name }}</td>
                            <td><a class="pull-right btn btn-default btn-sm" href="/listings/{{$list->id}}/edit">Edit</a></td>
                            <td>
                                {!! Form::open(['action' => ['ListingsController@destroy', $list->id], 'method'=> 'POST', 'class'=>'pull-left', 'onsubmit'=>'return confirm("Are you Sure?")']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::bsSubmit('Delete', ['class'=>'btn btn-danger btn-sm']) }}
                                {!! Form::close() !!}
                            </td>
                            </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
