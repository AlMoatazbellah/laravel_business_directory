@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Latest Business Listing</div>

                <div class="panel-body">
                    @if( count($listings) )
                        <ul class="list-group">
                        @foreach( $listings as $list )
                        <li class="list-group-item"><a href="/listings/{{ $list->id }}">{{ $list->name }}</a></li>
                        @endforeach
                        </ul>
                    @else
                        <p>No listing found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
