@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$siteConfig->front_page_title}}</div>

                <div class="panel-body">
                    {{$siteConfig->front_page_body}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
